<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return "Hola desde la pagina Home";
    // }

    public function __invoke(){
        return "Hola desde la pagina Home";
    }
}
