<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller {

    public function inicio() {
        return view("welcome");
    }

    public function inicio2() {
        return view("inicio2");
    }

    public function quieneSomos() {
        return view("quieneSomos");
    }

    public function servicios() {
        return view("servicios");
    }

    public function contacto() {
        return view("contacto");
    }
}
