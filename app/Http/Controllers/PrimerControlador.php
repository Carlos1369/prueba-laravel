<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        $post = ['post1','post2'];
        //return view('contact', ['name' => 'Andres']);
        return view('contact', compact('post'));
    }

    function otro($post){
        echo $post;
    }
}

