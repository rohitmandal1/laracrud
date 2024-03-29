@extends('layouts.app')

@section('content')
<a class="btn btn-default" href="/">Go Back</a>

	<h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
	<div class="label label-danger">{{$todo->due}}</div>
	<hr>
		<p>{{$todo->body}}</p>
		<br><br>
		<a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
		<form method="POST" action="/todo/{{$todo->id}}">
  {!! csrf_field()!!} 
      <input type="hidden" name="_method" class="form-control" value="DELETE">
       <div>
      <input type="submit" name="delete" value="Delete" class="btn btn-primary pull-right">
    </div>
  </form>
@endsection