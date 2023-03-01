@extends('layouts.app')

@section('content')
<!-- CAROUSEL -->
  <section id="posts" class="posts-section shadow-lg border-5 border-top border-bottom">
    <div class="container-lg py-5">
      <div class="container-lg px-0">
        <div class="row">
          <div class="col">
            <h2 class="title-section">RECOMENDADOS</h2>
          </div>
          <div class="col clearfix">
            <span class="title-section d-flex justify-content-end">
              <button
                class="btn btn-archive btn-sm"
                type="button"
                data-bs-target="#postSlider"
                data-bs-slide="prev"
              >
                <i class="fas fa-arrow-left"></i>
  
                <span class="visually-hidden">Previous</span></button
              ><span class="mx-1">&nbsp;</span>
              <button
                class="btn btn-archive btn-sm"
                type="button"
                data-bs-target="#postSlider"
                data-bs-slide="next"
              >
                <i class="fas fa-arrow-right"></i>
  
                <span class="visually-hidden">Next</span>
              </button>
            </span>
          </div>
        </div>
      </div>
  
      <div class="container-lg px-0">
        <div id="postSlider" class="carousel slide" data-bs-ride="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-lg bg-card">
                <div class="row d-flex align-items-center">
                  <div class="col-md-6 p-3 p-md-1">
                    <div class="container post-body">
                      <h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                      </h2>
                      <div class="post-info">
                        <i class="far fa-calendar-alt"></i>&nbsp; Rome, 28
                        September 1997
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 order-first order-md-last px-0">
                    <div class="text-img-over">
                      <img
                        src="https://source.unsplash.com/user/erondu/800x600"
                        class="card-img-top"
                        alt="..."
                      />
                      <div class="overlay">
                        <div class="social-hover">
                          <a href="#"><i class="fas fa-share-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-lg bg-card">
                <div class="row d-flex align-items-center">
                  <div class="col-md-6 p-3 p-md-1">
                    <div class="container post-body">
                      <h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                      </h2>
                      <div class="post-info">
                        <i class="far fa-calendar-alt"></i>&nbsp; Rome, 28
                        September 1997
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 order-first order-md-last px-0">
                    <div class="text-img-over">
                      <img
                        src="https://source.unsplash.com/user/nasa/800x600"
                        class="card-img-top"
                        alt="..."
                      />
                      <div class="overlay">
                        <div class="social-hover">
                          <a href="#"><i class="fas fa-share-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-lg bg-card">
                <div class="row d-flex align-items-center">
                  <div class="col-md-6 p-3 p-md-1">
                    <div class="container post-body">
                      <h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                      </h2>
                      <div class="post-info">
                        <i class="far fa-calendar-alt"></i>&nbsp; Rome, 28
                        September 1997
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 order-first order-md-last px-0">
                    <div class="text-img-over">
                      <img
                        src="https://source.unsplash.com/user/jlondonbaker/800x600"
                        class="card-img-top"
                        alt="..."
                      />
                      <div class="overlay">
                        <div class="social-hover">
                          <a href="#"><i class="fas fa-share-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- MAIN PRODUCTOS -->
    <section class="container-xl py-5">
        <h2 class="title-section text-center my-5">Nuestros productos</h2>
        <div class="row">
            @foreach ($productos as $producto)
            <a href="{{route('product.show',$producto->id)}}" class="col-lg-3 col-md-4 mb-3 " id="link">
                <div class="fproduct border border-2">
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
