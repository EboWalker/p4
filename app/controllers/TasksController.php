<?php

class TasksController extends BaseController {

	// Display a the index 
	public function index()
	{
		$tasks = Task::paginate();
		return View::make('list', array('tasks' => $tasks));
	}
	
	// Display the form
	public function create()
	{
		$task = new Task;
     	return View::make('/form')->with('task', $task);
	}

	// Store the task
	public function store()
	{
        $task  = new Task;
        $data = Input::all();

        if ($task->isValid($data))
        {
            $task->fill($data);
            $task->save();

            // Show the main page
            return Redirect::route('task.index');
        }
        else
        {
        	// if there's errors stay onthe create page
			return Redirect::route('task.create')->withInput()->withErrors($task->errors);
        }
    }

	// Show the new task
	public function show($id)
	{
		$task = Task::find($id);
		return View::make('show', array('task' => $task));
	}

	// Display the edit form
	public function edit($id)
	{
		$task = Task::find($id);

		// Redirect edits to form.blade.php
		return View::make('form')->with('task', $task);
	}

	// update the task
	public function update($id)
	{
        $task = Task::find($id);
        $data = Input::all();

       	// if the task is valid
        if ($task->isValid($data))
        {	//add the data
            $task->fill($data);
            //save it
            $task->save();
            //then redirect to the main page
            return Redirect::route('task.index', array($task->id));
        }
        else
        {	
        	//if data isn't complete, stay on edit page and throw error
            return Redirect::route('task.edit', $task->id)->withInput()->withErrors($task->errors);
        }
	}

	// Delete the task
	public function destroy($id)
	{
	        $task = Task::find($id);
	        $taskDeleted = $task;
	        $task->delete();

	}
}
