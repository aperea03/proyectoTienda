@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Contenedor central de compra --}}
    <div class="row">
        <div class="alert alert-info col-12 text-center" role="alert">
            ¡ COMPRA REALIZADA !
        </div>
        <h4>Direccion: <p class="fw-lighter">{{ Auth::user()->email }}</p></h4>
        <h4>Nombre: <p class="fw-lighter">{{ Auth::user()->name }}</p></h4>
        <h4>Fecha pedido: <p class="fw-lighter" id="current_date"></p></h4>
    </div>
    <a href="{{ url('/') }}" class="btn btn-success col-12" style="margin-top: 2rem">Continue comprando</a>
</div>
<script>
    document.getElementById("current_date").innerHTML = Date();
</script>
@endsection