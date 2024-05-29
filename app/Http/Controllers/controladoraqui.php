<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladoraqui extends Controller
{
    public function indexAction(){
        return view('Servicio.index');
    }
    public function HistoriaAction() {
        return  view('Servicio.Historia');
    }
    public function ServiciosAction() {
        return view('Servicio.Servicios');
    }
}
