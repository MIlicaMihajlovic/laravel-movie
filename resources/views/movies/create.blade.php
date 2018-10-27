@extends('layouts.master')

@section('title')
    Add movie
@endsection

@section('content')

  <h1>Add movie</h1>
  <form method="POST" action="/movies">

    {{ csrf_field() }}

    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label>Genre</label>
      <input type="text" name="genre" class="form-control" placeholder="Enter genre">
    </div>
    <div class="form-group">
      <label>Director</label>
      <input type="text" name="director" class="form-control" placeholder="Enter director">
    </div>
    <div class="form-group">
      <label>Year</label>
      <input type="integer" name="year" class="form-control" placeholder="Enter year">
    </div>
    <div class="form-group">
      <label>Storyline</label>
      <textarea name="storyline" type="text" class="form-control" placeholder="Enter storyline"></textarea>
    </div>

    
      <button type="submit" class="btn btn-primary">Submit</button>
       
  </form>
@endsection






