@extends('layouts.app')
@section('content')
	<form method="POST" action="{{isset($task) ? route('task.update',$task->id) : route('task.store') }}">
		@csrf
		@isset($task)
	        @method('PUT')
	    @endisset
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name Tasks</label>
	    <input type="text" class="form-control"name="name" value="{{ old('name',isset($task->name) ? $task->name : '')}}">
	    <span class="form-message">
             @if($errors->has('name'))
            <span class="text-danger">
                {{ $errors->first('name') }}
            </span>
             @endif
        </span>
	  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
@stop
