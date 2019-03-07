@extends('layout')

@section('title', $project->title)

@section('content')
			
		<h1 class="title">{{ $project->title }}</h1>

		<p class="content">
			{{ $project->description }}
		</p>

		<a href="/projects/{{ $project->id }}/edit" class="button">Edit</a>

		@if($project->tasks->count())
			<div style="margin-top: 20px;"  class="box">

			@foreach($project->tasks as $task)
					<form method="POST" action="/tasks/{{ $task->id}}">
						
						@csrf
						@method('PATCH')

						<label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
							<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }} >
							{{ $task->description }}
						</label>
					</form>
			@endforeach
			
			</div>
		@endif

		<form method="POST" action="/tasks" class="box" >
			
			@csrf

			<div class="field">
				<label class="label" for="desciption">New Task</label>

				<div class="control">
					<input type="text" class="input" name="description" placeholder="New Task">
				</div>

				<input type="hidden" name="project_id" value="{{ $project->id }}">
			</div>

				<button type="submit" class="button is-link">Add Task</button>
		</form>

@endsection