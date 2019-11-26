<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeApp extends Controller
{
    public function getIndex(){
        $contents = 'Home!!';

        return view('user.home',[
            'contents' => $contents,
        ]);
    }
}
