<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Iamfarhad\Validation\Rules\Mobile;
use Iamfarhad\Validation\Rules\PersianAlpha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class FeedBackController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect('/login');
    }
    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $validator = $this->validateData($request);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->first('image')) {
                Alert::toast('مقدار وارد شده بزرگ تر از حجم مجاز یا فرمت تصویر نادرست است', 'error');
                return redirect()->back();
            }
        }
        $user_id = Auth::user()->id;
        $user = User::FindOrFail($user_id);
        $user->role = $request->input('role');

        $destination = 'uploads/UserProfile/' . $user->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/UserProfile/', $filename);
        $user->update([
            'role' => $request->role,
            'image' => $filename,
        ]);
        Feedback::updateOrCreate([
            'user_id' => Auth::user()->id,
        ], [
            'description' => $request->description,
        ]);

        Alert::toast('اطلاعات با موفقیت ارسال شد', 'success');
        return redirect()->back();
    }

    public function validateData(Request $request)
    {
        return Validator::make($request->all(), [
            'role' => 'required|string',
            'image' => 'required|mimes:jpeg,jpg,png,gif|required|max:10000', // max 10000kb'
            'description' => 'required|string',
        ]);
    }
}
