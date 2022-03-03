<?php
/* CREACION DE UN CONTROLADOR DE MANERA MANUAL */
namespace App\Http\Controllers;

class EjemploController extends Controller {
    
    /* CREACIÓN DE UN METODO A LA RUTA PRINCIPAL DEL SITIO */
    public function inicio(){
        
        return "Estas en el inicio UNO del sitio web, BIENVENIDO.";
    }

}
