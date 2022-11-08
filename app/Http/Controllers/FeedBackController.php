<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class FeedBackController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        dd("sdf");
    }

    public function store(Request $request)
    {
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
        Feedback::updateOrCreate([
            'user_id' => Auth::user()->id,
        ], [
            'description' => $request->description,
        ]);
        $user->update([
            'role' => $request->role,
            'image' => $filename,
        ]);
        Alert::toast('مشخصات واردشده با اطلاعات وب سایت همخوانی ندارد', 'error');
        return redirect()->back();
    }
}
