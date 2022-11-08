<?php

namespace App\Http\Controllers\Site;

use App\ApiCode;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('index', compact('feedbacks'));
    }

    public function download(): \Symfony\Component\HttpFoundation\Response
    {
        if (Storage::disk('local')->exists('public/resume.pdf')) {
            return response()->download(storage_path('app/public/resume.pdf'));
        } else {
            Alert::toast('فایل مورد نظر پیدا نشد', 'error');
            return redirect()->back();
        }
    }
}
