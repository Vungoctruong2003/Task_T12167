<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function confirm()
    {
        $user = Session::get('user');
        return view('confirm',compact('user'));
    }

    public function done()
    {
        return view('done');
    }

    public function check(TestRequest $request)
    {
        $user = [
            'name' => $request->name,
            'phone' => $request->tel,
            'email'=>$request->email
        ];
        Session::put('user', $user);
        return redirect()->route('confirm');
    }
}
