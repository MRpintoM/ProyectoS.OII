<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PaginaController extends Controller
{
    public function Welc()
    {
        return \view('welcome');


    }
    public function Caracteris()
    {

        return \view('Paginas.Caracteristicas');

    }

    public function ventaj()
    {
        return \view('Paginas.Ventajas');

    }
}
