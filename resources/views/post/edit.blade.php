@extends('layouts.app')
@section('content')
<form action="{{route('post.update',$post->id)}}" method="POST">
  {{csrf_field()}}
  {{method_field('PUT')}}
    <div class="card">
        <div class="card-header">
           Edit Post
        </div>
        <div class="card-body mt-2">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                 @foreach ($categories as $category)     
                 <option value="{{$category->id}}" {{$post->category==$category ?'selected':''}}>{{$category->name}}</option>
                 @endforeach
                </select>
              </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" value='{{$post->title}}' name="title" class="form-control" id="title" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name='body' id="exampleFormControlTextarea1" rows="3">{{$post->body}}</textarea>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Edit" class="btn btn-primary">
        </div>
    </div>
  </form>
@endsection