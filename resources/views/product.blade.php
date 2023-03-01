@extends('layouts.app')

@section('content')
<!-- CAROUSEL -->


    <!-- Producto general -->
    <h1>{{$producto->name}}</h1>
    <img src="{{ $producto->image }}" alt="">
    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <input type="hidden" value="{{$producto->id}}" name="id">
        <input type="hidden" value="{{ $producto->name }}" name="name">
        <input type="hidden" value="{{ $producto->precio }}" name="precio">
        <input type="hidden" value="{{ $producto->image }}" name="image">
        <input type="hidden" value="1" name="quantity">
        <div class="card-footer" style="background-color: white;">
              <div class="row">
                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                    <i class="fa fa-shopping-cart"></i> AÑADIR
                </button>
            </div>
        </div>
    </form>
@endsection