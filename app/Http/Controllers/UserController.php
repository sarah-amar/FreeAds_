<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image'))
        {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image Uploaded'); //success message
        }
        return redirect()->back()->with('error', 'Image not Uploaded'); //error message
    }


    public function index(): string
    {
        return view('home ');
    }
}
