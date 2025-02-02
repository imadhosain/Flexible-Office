<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function logout() {
        auth()->logout();
        return view('welcome');
    }

    public function showcorrectpage() {
        if (auth()->check()) {
            $condition = auth()->user()->type;
            switch ($condition) {
                case'4':
                    return view('/admin/adminmainpage');
                  break;
                case '3':
                    return view('/ministry/ministrypage');
                break;
                case '2':
                return view('/accountant/accountantpage');
                break;
                case '0':
                return view('visitorpage');
                break;
            } 
        }
        else {
            return view('welcome');
        }
    }
    public function register (Request $request) {
        $incomingFields = $request->validate([
            'username'=> ['required', 'min:3', 'max:20', Rule::unique('users','username')],
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password'=> ['required', 'min:8' ,'confirmed']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);
        return view('visitorpage');
    }
    public function login (Request $request) {
        $incomingFields = $request->validate([
            'loginusername'=> ['required', 'min:3', 'max:20'],
            'loginpassword'=> ['required', 'min:8']
        ]);
        if (auth()->attempt(['username'=>$incomingFields['loginusername'], 'password'=> $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            return $this->showcorrectpage();
        }
        else {
            return view('welcome');

        }
    }
}
