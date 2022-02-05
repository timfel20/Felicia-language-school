@extends('layouts.app')
 @section('hero')
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  @if (!empty($slideproducts))
                      <div class="carousel-item active">
                        <img src="{{$slideproducts[0]->slideimage}}" style="object-fit:cover; object-position:100%; height:64vh" class="d-block w-100" alt="Highlighted event {{$slideproducts[0]->slidetitle}}">
                      </div>
                  @endif
                  @for ($i = 1; $i < count($slideproducts); $i++)
                  <div class="carousel-item">
                      <img src="{{$slideproducts[$i]->slideimage}}" class="d-block w-100" style="object-fit: cover; object-position:100%; height:64vh" alt="Highlighted event {{$slideproducts[$i]->slidetitle}}">
                  </div>
                  @endfor
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
      </div>
    </section>
 @endsection    