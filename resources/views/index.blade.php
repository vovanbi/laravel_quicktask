@extends('layouts.app')
@section('content')
   <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">@lang('auth.nameTask')</th>
          <th class="action"> @lang('auth.action')</th>
        </tr>
      </thead>
      <tbody>
        @if(isset($tasks))
            @foreach($tasks as $task)
                <tr>
                  <th scope="row">{{$task->id}}</th>
                  <td>{{$task->name}}</td>
                  <td>
                    <span>
                     <a href="{{ route('action.delete',$task->id)}}" title="Delete" class="btn btn-danger">    <i class="fa fa-trash-o" aria-hidden="true" ></i>
                         @lang('auth.delete')
                     </a>
                     <a href="{{ route('edit',$task->id)}}" title="Edit" class="btn btn-info">
                         <i class="fa fa-pencil" aria-hidden="true"></i>
                         @lang('auth.update')
                     </a>
                    </span>
                  </td>
                </tr>
            @endforeach
        @endif
      </tbody>
    </table>
@stop