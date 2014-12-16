@extends ('base')

@section ('content')

<!-- show the task from the view button -->
<div class="row">
	<!-- show task id, title, description -->
	<h2>task #{{ $task->id }}</h2>
	<p>Title: {{ $task->title }}</p>
	<p>Task Description: {{ $task->body }}</p>

</div>

<div class="row">
	<!-- Show TaskList and Edit Buttons -->
	<div class="form-group col-md-4">
	     <a href="{{ route('task.index') }}" class="btn btn-info">TaskList</a>
	     <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit </a>
	</div>

</div>

@stop

