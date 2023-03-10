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
                        Pod recargable UWELL KOKO prime kit
                      </h2>
                      <div class="post-info">
                        &nbsp; <h2 class="text-success">27,95 €</h2><br><br>
                        <p>El Koko Prime tiene una batería incorporada de 690mAh de mayor capacidad. 
                          El kit también tiene un indicador LED de tres colores. 
                          Podrás conocer fácilmente los niveles de la batería a través de un indicador luminoso. 
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 order-first order-md-last px-0">
                    <div class="text-img-over">
                      <img
                        src="{{URL::asset('images/carousel1.PNG')}}"
                        class="card-img-top"
                        alt="Pod"
                      />
                      <div class="overlay">
                        <div class="social-hover">
                          <a href="https://www.instagram.com/"><i class="fas fa-share-alt"></i></a>
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
                        TORTUGA FANCY RED
                      </h2>
                      <div class="post-info">
                        &nbsp; <h2 class="text-success">194,95 €</h2><br><br>
                        <p>Cachimba de estilo moderno y fabricada en acero.<br>
                          Su cuerpo esta detallado con motivos piratas y tiene una purga integrada horizontal.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 order-first order-md-last px-0">
                    <div class="text-img-over">
                      <img
                        src="{{URL::asset('images/carousel2.PNG')}}"
                        class="card-img-top"
                        alt="Shisha"
                      />
                      <div class="overlay">
                        <div class="social-hover">
                          <a href="https://www.instagram.com/"><i class="fas fa-share-alt"></i></a>
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
                        ALPACA BOWL SYMPHONY
                      </h2>
                      <div class="post-info">
                        &nbsp; <h2 class="text-success">34,95 €</h2><br><br>
                        <p>Os presentamos el modelo SYMPHONY de la prestigiosa marca americana Alpaca Bowls, 
                          una cazoleta <br> fabricada en el mejor barro blanco poroso y diseñada para dar el máximo rendimiento, 
                          sin duda un articulo que debe estar en tu coleccion.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 order-first order-md-last px-0">
                    <div class="text-img-over">
                      <img
                        src="{{URL::asset('images/carousel3.PNG')}}"
                        class="card-img-top"
                        alt="cazoleta"
                      />
                      <div class="overlay">
                        <div class="social-hover">
                          <a href="https://www.instagram.com/"><i class="fas fa-share-alt"></i></a>
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

    <!-- GENERACIÓN CARDS DE PRODUCTOS -->
    <section class="container-xl py-5">
        {{-- BUSQUEDA --}}
        <div class="container pb-3 border-bottom">
          <h2 class="text-center pb-3">BUSCA LO QUE ENCUENTRAS AQUÍ</h2>
          <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="BUSCAR ..." aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
              </span>
          </div>
      </div>
        <h2 class="text-center my-5">Últimos productos</h2>
        <div class="row">
            @foreach ($productos as $producto)
            <a href="{{route('product.show',$producto->id)}}" class="col-lg-3 col-md-4 mb-3 " id="link">
                <div class="fproduct border border-2">
                    <img src="{{$producto->image}}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#modal1" id="modal-imagen">
                    <h3>{{$producto->name}}</h3>
                    <p class="text-success"><strong>{{$producto->precio}}€</strong></p>
                    <p>{{$producto->categoria}}</p>
                </div>
            </a>
            @endforeach
        </div>
        {{-- {{$productos->links()}} --}}
      </section>
@endsection
