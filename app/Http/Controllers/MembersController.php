<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    //

    public function login()
    {
        return view('member.login');
    }

    public function postLogin(Request $request)
    {
        $request->session()->put('userName', $request->txtUserName);
        return redirect('/home/index');
        // return $request->txtUserName;
    }

    public function postLogout(Request $request)
    {
        $request->session()->forget('userName');
        return redirect('/home/index');
        // return $request->txtUserName;
    }
}
