@extends('layouts.app')
@section('productform')
  <form class='form mt-7' action = {{ route('product.store')}} method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
      <small id="emailHelp" class="form-text text-muted">Fill out the deatils of your new products here</small>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input name="image" type="url" class="form-control" id="exampleInputPassword1" placeholder="image">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="description">
    </div>
    <div class="form-group">
      <label for="people">Number of People</label>
      <input name="people" type="number" class="form-control" id="exampleInputPassword1" placeholder="people">
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input name="date" type="datetime-local" class="form-control" id="exampleInputPassword1" placeholder="date">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <x-footer/>
@endsection