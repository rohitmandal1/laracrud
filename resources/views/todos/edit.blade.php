@extends('layouts.app')


@section('content')
<a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
<h1>Create Todo</h1>
 <form method="POST" action="/todo/{{$todo->id}}">
  {!! csrf_field()!!}
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="text" class="form-control" placeholder="Enter name" value="{{$todo->text}}">
    </div>
    <div class="form-group">
    	<label>Body</label>
    	<textarea cols="35" rows="3" name="body" class="form-control" placeholder="Enter mesage">{{$todo->body}}</textarea>
    </div>
    <div class="form-group">
    	<label>Due</label>
    	<input type="text" name="due" class="form-control" placeholder="Enter name" value="{{$todo->due}}">
      <input type="hidden" name="id" value="{{$todo->id}}">
      <input type="hidden" name="_method" class="form-control" value="PUT">
    </div>
    <!-- <div class="form-group">
      <label>Due</label>
      <select>
        
        <option value="{{$todo->id}}">{{$todo->due}}</option>
        <option value="{{$todo->id}}">{{$todo->due}}</option>
      </select>
      <input type="text" name="due" class="form-control" placeholder="Enter name" value="{{$todo->due}}">
    </div> -->
    <div>
      <input type="submit" name="update" value="Update" class="btn btn-primary">
    </div>
  </form>
@endsection