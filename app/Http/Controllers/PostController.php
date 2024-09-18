<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = [
                ['titulo' => 'Mi titulo uno',
                'contenido' => 'Mi contenido'],
                ['titulo' => 'Mi titulo dos',
                'contenido' => 'Mi contenido dos'],
                ['titulo' => 'Mi titulo tres',
                'contenido' => 'Mi contenido tres'],            
            ];

        // $posts = [];

        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        return "Se procesara el formulario para crear post";
    }

    public function show($post){
        return view('posts.show', compact('post'));
    }

    public function edit($post){
        return view('posts.edit', compact('post'));
    }

    public function update($post){
        return "Se procesara el form para actualizar el post ";
    }

    public function destroy($post){
        return "Se procesara la eliminacion de un Post ";
    }


}
