<?php

namespace Curder\HelloWorld\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = config("helloworld.message");
        return view('HelloWorld::welcome', compact('message'));
    }
}
