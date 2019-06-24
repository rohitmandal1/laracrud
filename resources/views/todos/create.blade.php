@extends('layouts.app')


@section('content')
<h1>Create Todo</h1>
 <form method="POST" action="{{url('/create/submit')}}">
  {!! csrf_field()!!}
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="text" class="form-control" placeholder="Enter name" value="">
    </div>
    <div class="form-group">
    	<label>Body</label>
    	<textarea cols="35" rows="3" name="body" class="form-control" placeholder="Enter mesage"></textarea>
    </div>
    <div class="form-group">
    	<label>Due</label>
    	<input type="text" name="due" class="form-control" placeholder="Enter name" value="">
    </div>
    <div>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </div>
  </form>
@endsection