<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(session('admin_logged_in'))
            return redirect(route('admin.dashboard'));

        return view('admin.pages.login');
    }

    public function CheckUser(CheckUserRequest $request){
        $data = $request->validated();
        $user = User::first();
        if($data["email"] === $user->email && $data["password"] === $user->password){
            session(['admin_logged_in' => true]);
            return redirect(route('admin.dashboard'));
        }
        return redirect(route('admin.login'))->with('error', 'Invalid Credentials');
    }

    public function logout(){
        session()->invalidate();
        session()->regenerateToken();

        return redirect(route('admin.login'));
    }
}
