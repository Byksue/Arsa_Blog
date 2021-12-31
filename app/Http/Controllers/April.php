<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class April extends Controller
{
    public function index(){
        $title = '';
        return view('april', [
            'title' => 'April'
        ]);
    }
}
