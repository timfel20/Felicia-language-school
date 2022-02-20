@extends('layouts.app')
@section('sliderform')
<div class ='d-flex flex-column justify-content-center align-items-center' style='margin-top:135px; margin-bottom:105px; width:95%; height:60vh'>
  <form action = {{ route('slider.view')}} method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input style="width:550px" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
      <small id="emailHelp" class="form-text text-muted">Fill out the deatils of your new products here</small>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input style="width:550px" name="image" type="url" class="form-control" id="exampleInputPassword1" placeholder="image">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input style="width:550px" name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="description">
    </div>
    <div class="form-group">
      <label for="people">Number of People</label>
      <input style="width:550px" name="people" type="number" class="form-control" id="exampleInputPassword1" placeholder="people">
    </div>
    <div class="form-group mb-2">
      <label for="date">Date</label>
      <input style="width:550px" name="date" type="datetime-local" class="form-control" id="exampleInputPassword1" placeholder="date">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  <x-footer/>
@endsection
@if (!empty($slideproducts))
                  <div class="carousel-item active">
                    <img src="{{$slideproducts[0]->slideimage}}" style="object-fit:cover; object-position:100%; height:64vh" class="d-block w-100" alt="{{$slideproducts[0]->slidetitle}}">
                  </div>
              @endif
              @for ($i = 1; $i < count($slideproducts); $i++)
              <div class="carousel-item">
                  <img src="{{$slideproducts[$i]->slideimage}}" class="d-block w-100" style="object-fit: cover; object-position:100%; height:64vh" alt="{{$slideproducts[$i]->slidetitle}}">
              </div>
              @endfor
