<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function __invoke($name, $nickname = null) {
        if($nickname) {
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        }else{
            return "Bienvenido {$name}, No tienes Apodo";
        }
    }
}
