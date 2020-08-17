<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile()
    {
        return view('users.profile', ['user' => Auth::user()]);
    }

    public function update(UserUpdateRequest $request)
    {
        $data = $request->validated();

        if ($request->has('image')) {

            Auth::user()->imageDelete();

            $data['image'] = request()->file('image')->store(
                'assets/users',
                'public'
            );
        }
        Auth::user()->update($data);

        session()->flash('success', 'Profil change saved.');
        return redirect()->back();
    }
}
