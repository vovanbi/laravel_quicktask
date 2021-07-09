@extends('layouts.app')
@section('content')
   <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">@lang('auth.name')</th>
          <th class="action">@lang('auth.action')</th>
        </tr>
      </thead>
      <tbody>
        @if(isset($tasks))
            @foreach($tasks as $task)
                <tr id="task-{{ $task->id }}">
                  <th scope="row">{{$task->id}}</th>
                  <td>{{$task->name}}</td>
                  <td>
                    <span class="d-flex">
                      <a data-id="{{$task->id}}" title="Delete" class="btn-del btn btn-danger mr-2 "><i class="fa fa-trash-o" aria-hidden="true" ></i>
                         Delete
                     </a>
                     <a href="{{ route('task.edit',$task->id)}}" title="Edit" class="btn btn-info">
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

