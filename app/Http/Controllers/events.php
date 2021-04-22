<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class events extends Controller
{
    //
    function list(Request $request, $slug){
        // return 'https://blog.arenakamanahalli.in//wp-json/wp/v2/posts?slug='.$slug;
        $data = Http::get("https://blog.arenakamanahalli.in//wp-json/wp/v2/posts?slug=".$slug)->json();
        return view('events',['data'=>$data[0]]);
    }
}
