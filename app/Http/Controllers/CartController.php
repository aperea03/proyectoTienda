<?php

namespace App\Http\Controllers;

use App\Models\Producto;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()  {
        $cartCollection = \Cart::getContent();
        // dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);;
    }
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->precio,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('cart.index');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.index');
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.index');
    }
    public function clearAllCart()
    {
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('inicio');
    }
    public function checkout()
    {
        \Cart::clear();
        // return redirect()->route('inicio');
        return view('checkout');
    }
}
