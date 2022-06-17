@extends('layouts.default')

@section('PageTitle','Dc Comics - Create Comic')

@section('MainContent')
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="title here" name="title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" placeholder="description here" name="description" cols="30"></textarea>
    </div>
    <div class="form-group">
      <label for="thumb">Thumb</label>
      <input type="text" class="form-control" id="thumb" aria-describedby="thumb" placeholder="thumb-url here" name="thumb">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" aria-describedby="price" placeholder="price here" name="price" min="1" max="60" step="0.01" >
    </div>
    <div class="form-group">
      <label for="series">Series</label>
      <input type="text" class="form-control" id="series" aria-describedby="series" placeholder="comic's series here" name="series">
    </div>
    <div class="form-group">
      <label for="sale_date">Sale date</label>
      <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" placeholder="sale date here" name="sale_date">
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <select class="form-control" name="type" id="type">
        <option value="graphic novel">Graphic Novel</option>
        <option value="comic book">Comic Book</option>
      </select>
    </div>
    <button type="submit" class="btn btn-danger">Save</button>
  </form>
@endsection