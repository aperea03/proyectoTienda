<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\User;

class ListadoProduct extends Controller
{
    public function index(){
        $productos = Producto::orderBy('id','asc')->paginate(12);
        return view('home', compact('productos'));
    }

    public function show($id){
        $producto = Producto::find($id);
        return view('product', compact('producto'));
    }
    public function deleteuser($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/');
    }
    // Categorias
    public function shishas(){
        $productos = Producto::all()->where('categoria','Shisha');
        return view('apartados.shishas', compact('productos'));
    }
    public function pods(){
        $productos = Producto::all()->where('categoria','Pod');
        return view('apartados.pods', compact('productos'));
    }
    public function accesorios(){
        $productos = Producto::all()->where('categoria','Accesorios');
        return view('apartados.accesorios', compact('productos'));
    }
}
