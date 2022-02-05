@extends('layouts.app')
@section('myproducts')
<section id="services" class="services section-bg">
    <div class="row">
      <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <img class="d-flex justify-content-center align-items-center p-0 m-0" style="width=110px; height:30vh" src="{{$product->image}}">
          <h4><a href="https://bootstrapmade.com/demo/templates/Arsha/">{{$product->title}}</a></h4>
          <p>{{$product->description}}</p>
          <div class="d-flex justify-content-center align-items-center">
          <button>Edit</button>
          <button>Apply</button>
          <form action="product/{{$product->id}}" method ="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button> 
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -
@endsection