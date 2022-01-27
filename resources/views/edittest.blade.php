@extends('layouts.app')
@section('edtproduct')
  <form action="{{route('products.update', ['id' => $product->id ])}}" enctype="multipart/form-data" method="POST" >
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" value={{"$product->title"}} type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
      <small id="emailHelp" class="form-text text-muted">Fill out the deatils of your new products here</small>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input name="image" value={{"$product->image"}} type="url" class="form-control" id="exampleInputPassword1" placeholder="image">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input name="description" value={{"$product->description"}} type="text" class="form-control" id="exampleInputPassword1" placeholder="description">
    </div>
    <div class="form-group">
      <label for="people">Number of People</label>
      <input name="people" value={{"$product->people"}} type="number" class="form-control" id="exampleInputPassword1" placeholder="people">
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input name="date" value={{"$product->date"}} type="datetime-local" class="form-control" id="exampleInputPassword1" placeholder="date">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
