<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\Login;
use App\Http\Requests\Admin\Profile\Update;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Login $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard.index');
        } else {
            return redirect()->back()->with(['error' => 'هناك خطاء في البيانات ']);
        }
    }

    public function profile()
    {
        $admin = auth()->guard('admin')->user();
        return view('admin.profile.edit',compact('admin'));
    }
    public function updateProfile(Update $request){
        auth()->guard('admin')->user()->update($request->validated());
        return (['response' => 'success', 'url' => route('admin.dashboard.index')]);
    }
    public function logout() {
        auth('admin')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect(route('admin.login'));
    }
}
