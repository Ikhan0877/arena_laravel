<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class posts extends Controller
{
    //

    function list(){

        $data = Http::get('https://blog.arenakamanahalli.in//wp-json/wp/v2/posts')->json();
        return view('blog',['data'=>$data]);
    }
}
