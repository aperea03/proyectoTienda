<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ListadoProduct extends Controller
{
    public function index(){
        $productos = Producto::orderBy('id','asc')->paginate(12);
        // $cursos = Curso::paginate();
        return view('home', compact('productos'));
    }

    public function show($id){
        $producto = Producto::find($id);
        return view('product', compact('producto'));
    }
}
