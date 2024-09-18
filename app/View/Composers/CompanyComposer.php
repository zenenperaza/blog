<?php

    namespace App\View\Composers;

    class CompanyComposer {

        public function compose($view) {

            $view->with('prueba2', 'esta es la 2da prueba');

        }

    }