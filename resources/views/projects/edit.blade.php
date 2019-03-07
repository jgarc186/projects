@extends('layout')

@section('title', 'Edit Post')

@section('content')

		<h1 class="title">Edit Project</h1>

		<form action="/projects/{{ $project->id }}" method="POST" style="margin-bottom: 20px;">

			@csrf
			@method("PATCH")

			<div class="field">
				<label class="label" for="title">Title</label>
				<input type="text" class="input" name="title" value="{{ $project->title }}">
			</div>

			<div class="field">
				<label class="label" for="description">Description</label>
				<textarea type="text" class="textarea" name="description">{{ $project->description }}</textarea>
			</div>

			<div class="field">
				<div class="control">
					<button type="submit" class="button is-link">Update Project</button>
				</div>
			</div>

		</form>

		<form action="/projects/{{ $project->id }}" method="POST">

			@csrf
			@method('DELETE')

			<div class="control">
				<button type="submit" class="button">Delete Project</button>
			</div>			
		</form>

@endsection