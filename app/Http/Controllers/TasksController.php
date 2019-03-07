<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
	public function store()
	{
		Task::create([
			'project_id' => request('project_id'),
			'description' => request('description')
		]);

		return back();
	}

    public function update(Task $task)
    {
    	$task->update([
    		'completed' => request()->has('completed')
    	]);

    	return back();
    }
}
