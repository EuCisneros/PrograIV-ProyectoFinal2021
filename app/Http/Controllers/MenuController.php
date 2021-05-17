<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function comunidad ()
    {
        return view('comunidad.Comunidad');
    }

    public function derechos ()
    {
        return view('derechos.Derechos');
    }

    public function informacion ()
    {
        return view('informacion.Informacion');
    }

    public function mision ()
    {
        return view('mision.mision');
    }
}
