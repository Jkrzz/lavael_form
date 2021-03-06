@extends('layouts.app')
@section('content')
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}};
    </div>
@endforeach
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
    <div class="card">
        <div class="card-header">
            Create Post
        </div>
        <div class="card-body mt-2">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                 @foreach ($categories as $category)     
                 <option value="{{$category->id}}">{{$category->name}}</option>
                 @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="formFile"  class="form-label">Default file input example</label>
                <input class="form-control" name="image" type="file" id="formFile">
              </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name='body' id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Create" class="btn btn-primary">
        </div>
    </div>
  </form>
@endsection