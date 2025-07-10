<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;//Esto es para la funcion index
use Illuminate\View\View;//Esto es para el view
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    //Esto se trae lo de proyecto
    public function index()
    {
        $proyectos = Proyecto::paginate();
        //Ponemos la ruta de welcome para que muestre welcome pero con los datos de proyectos
        return view('welcome', compact('proyectos'));
    }
}
