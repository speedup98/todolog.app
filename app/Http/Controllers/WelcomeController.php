<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        $uc = 0;
        $pc = 0;
        $tc = 0;

        $total = [
            'user' => $uc,
            'project' => $pc,
            'task' => $tc,
        ];
        return view('welcome')->with('total', $total);
    }
}
