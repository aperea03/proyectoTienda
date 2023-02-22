@extends('layouts.app')

@section('content')
<!-- CAROUSEL -->


    <!-- MAIN PRODUCTOS -->
    <section class="container-xl py-5">
        <h2 class="text-center my-5">Nuestros productos</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 mb-3">
                <img src="https://picsum.photos/600/400" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#modal1" id="modal-imagen">
                <h3>Titulo Producto</h3>
                <p>400€</p>
                <p>Valoraciones</p>
            </div>
            <div class="col-lg-3 col-md-4 mb-3">
                <img src="https://picsum.photos/600/400" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#modal1" id="modal-imagen">
                <h3>Titulo Producto</h3>
                <p>400€</p>
                <p>Valoraciones</p>
            </div>
        </div>
      </section>
@endsection
