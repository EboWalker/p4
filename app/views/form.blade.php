@extends ('base')

<!-- Fetch form Data for saved tasks or present a new form-->
<?php
  if ($task->exists):
    $form_data = array('route' => array('task.update', $task->id), 'method' => 'PATCH');
    $action = 'Save';
  else:
    $form_data = array('route' => 'task.store', 'method' => 'POST');
    $action = 'Create';
  endif;
?>

@section ('content')

<h1>Edit Task</h1>

<!-- Form Body -->
{{ Form::model($task, $form_data, array('role' => 'form')) }}

<!-- include errors -->
@include ('errors', array('errors' => $errors))

<div class="row">
  <!-- Form for Title description -->
  <div class="form-group col-md-4">
    {{ Form::model($task, array('route' => 'task.store', 'method' => 'POST'), array('role' => 'form')) }}
    {{ Form::label('title', 'Task Title') }}
    {{ Form::text('title', null, array('placeholder' => 'Title ', 'class' => 'form-control')) }}
  </div>
  <!-- Form for body description -->
  <div class="form-group col-md-10">
    {{ Form::label('body', 'Description') }}
    {{ Form::text('body', null, array('placeholder' => 'Describe the Task', 'class' => 'form-control')) }}
  </div>
  <!-- Form for status with selector -->
  <div class="form-group col-md-4">
    {{ Form::label('status', 'Status') }}
    {{ Form::select('status', array(
    'new' => 'new',
    'incomplete' => 'incomplete',
    'completed' => 'completed'
    )) }}
  </div>

</div>

<div class="row">

  <div class="form-group col-md-4">

    <!-- Route back to task list -->
    <a href="{{ route('task.index') }}" class="btn btn-info">TaskList</a>
    <!-- Shows 'save task' or 'create task' button -->
    {{ Form::button($action. ' task' , array('type' => 'submit', 'class' => 'btn btn-primary')) }}
    {{ Form::close() }}

  </div>

</div>

@stop
