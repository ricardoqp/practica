<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function login (){
        return view('login');
    }

    public function validarlogin (Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('password');
        $key = $request -> input('key');

        if($user === 'usuarioprueba' && $pass === '123' && $key === '123'){
            $url='archivo';
        } else{
            $url='login';
        }

        return view($url);
    }

        public function home (){
            return view('archivo');
        }

        public function vangogh (){
            return view('Vangogh');
        }

        public function dali (){
            return view('Dali');
        }

        public function picasso (){
            return view('Picasso');
        }

        public function davinci (){
            return view('davinci');
        }

        public function miguela (){
            return view('Miguel Ángel');
        }
}

