@extends('layouts.app')
@section('content')
<form action="{{route('category.update',$category->id)}}" method="POST">
  {{csrf_field() }}
  {{method_field('PUT')}}
    <div class="card">
        <div class="card-header">
           Edit Category
        </div>
        <div class="card-body mt-2">
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" value="{{$category->name}}" name="name" class="form-control" id="title" >
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Edit" class="btn btn-primary">
        </div>
    </div>
  </form>
  </table>
@endsection