@extends('layouts.app')

@section('content')
    
<div class="container">

    <div class="row">
        <section class="col-xs-12 col-md-6">
            <img src="{{ $producto->image }}" alt="" class="img-fluid">
        </section>
        <section class="col-xs-12 col-md-6">
            <br>
            <h1>{{$producto->name}}</h1>
            <br>
            <h3 class="text-danger">{{$producto->categoria}}</h3>
            <p>{{$producto->descripcion}}</p>
            <br>
            <h2>{{$producto->precio}} €</h2>
            <br>
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <input type="hidden" value="{{$producto->id}}" name="id">
                <input type="hidden" value="{{ $producto->name }}" name="name">
                <input type="hidden" value="{{ $producto->precio }}" name="precio">
                <input type="hidden" value="{{ $producto->image }}" name="image">
                <input type="hidden" value="1" name="quantity">
                <div class="card-footer addcart">
                      <div class="row">
                        <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                            <i class="fa fa-shopping-cart"></i> AÑADIR
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
    
@endsection