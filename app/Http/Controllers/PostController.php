<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Hola desde la pagina de Post";
    }

    public function create(){
        return "Hola desde la pagina de Crear Post";
    }

    public function store(){
        return "Se procesara el formulario para crear post";
    }

    public function show($post){
        return "Se mostrara el post $post";
    }

    public function edit($post){
        return "Se mostrara el form para editar el post ";
    }

    public function update($post){
        return "Se procesara el form para actualizar el post ";
    }

    public function destroy($post){
        return "Se procesara la eliminacion de un Post ";
    }


}
