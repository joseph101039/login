<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $userName = $request->session()->get("userName", "guest");
        return view('home.index', compact('userName'));
    }

    public function getMember(Request $request)
    {
        $userName = $request->session()->get("userName", "guest");
        if($userName === "guest") {
            return redirect("/member/login");
        }
        return view('home.member', compact('userName'));
    }
}
