<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Vimeo\Laravel\VimeoManager;

class HomeController extends Controller
{
    public function index(){
        return view('form');
    }

    public function upload(Request $request, VimeoManager $vimeo){
        $request->validate(
            ['video' => 'required']
        );

        $uri = $vimeo->upload($request->video, [
            'name' => 'Obs test recording',
            'description' => 'easy direct upload'
        ]);

        dd($uri);
    }
}
