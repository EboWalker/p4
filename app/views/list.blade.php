@extends('base')

@section ('content')

  <!-- Show main tast list -->
  <h1>Task List</h1>

  <p>
    <!-- Create task button -->
    <a href="{{ route('task.create') }}" class="btn btn-primary">Create New Task</a>
  </p>

<!-- Class table -->
<table class="table task-table">
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  
  @foreach ($tasks as $task)
  
  <tr>
    <td>{{ $task->title }}</td>
    <td>{{ $task->body}}</td>
    <td>{{ $task->status}}</td>
    <td>
      <!-- View, Edit, Delete buttons -->
      <a href="{{ route('task.show', $task->id) }}" class="btn btn-info">View</a>
      <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit</a>
      <a href="#" data-id="{{$task->id}}" class="btn btn-danger btn-delete">Delete</a> 
    </td>
    </td>
  </tr>

  @endforeach
  
  </table>

<!-- Task Delete form -->
{{ Form::open(array('route' => array('task.destroy', 'TASK_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
{{ Form::close() }}

@stop
