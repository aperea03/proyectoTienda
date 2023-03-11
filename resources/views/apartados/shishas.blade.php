@extends('layouts.app')

@section('content')
    {{-- BUSQUEDA --}}
    <div class="container pb-3 border-bottom">
        <h2 class="text-center pb-3">BUSCA LO QUE ENCUENTRAS AQUÍ</h2>
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="BUSCAR ..." aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
        </div>
    <!-- CARD PRODUCTO -->
    <section class="container-xl py-5">
        <h2 class="title-section text-center mb-5">Shishas</h2>
        <div class="row">
            @foreach ($productos as $producto)
            <a href="{{route('product.show',$producto->id)}}" class="col-lg-3 col-md-4 mb-3" id="link">
                <div class="fproduct">
                    <img src="{{$producto->image}}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#modal1" id="modal-imagen">
                    <h3>{{$producto->name}}</h3>
                    <p>{{$producto->precio}}€</p>
                    <p>{{$producto->categoria}}</p>
                </div>
            </a>
            @endforeach
        </div>
        {{-- {{$productos->links()}} --}}
      </section>

@endsection