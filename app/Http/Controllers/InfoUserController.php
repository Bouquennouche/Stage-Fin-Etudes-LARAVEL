<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;

class InfoUserController extends Controller
{

    public function create()
    {
        return view('laravel-examples/admin-profil');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'phone' => ['nullable', 'max:10', 'regex:/^0[5-7][0-9]{8}$/'],
            'location' => ['max:70'],
        ]);

        User::where('id', Auth::user()->id)
            ->update([
                'name'    => $attributes['name'],
                'email' => $attributes['email'],
                'phone'     => $attributes['phone'],
                'location' => $attributes['location'],
            ]);


        return redirect('/admin-profil')->with('success', 'Profile updated successfully');
    }
}
