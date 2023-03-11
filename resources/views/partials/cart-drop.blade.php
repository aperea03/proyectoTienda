@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
    {{-- DROPDOWN CARRITO --}}
        <li class="list-group-item">
            {{-- Tarjeta de producto --}}
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ $item->attributes->image }}" style="width: 50px; height: 50px;">
                </div>
                <div class="col-lg-6">
                    <b>{{$item->name}}</b>
                    <br><small>Cant: {{$item->quantity}}</small>
                </div>
                <div class="col-lg-3">
                    <p>{{ \Cart::get($item->id)->getPriceSum() }}€</p>
                </div>
                <hr>
            </div>
        </li>
    @endforeach
    <br>
    {{-- Lista de botones --}}
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-10">
                <b>Total: </b>{{ \Cart::getTotal() }}€
            </div>
            <div class="col-lg-2">
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
            CARRITO <i class="fa fa-arrow-right"></i>
        </a>
    </div>
@else
    <li class="list-group-item text-danger">El carrito está vacio.</li>
@endif