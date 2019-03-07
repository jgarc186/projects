@extends('layout')

@section('title', 'Create New Project')

@section('content')
	
	<h1 class="title">Create a New Project</h1>

	<form action="/projects" method="POST">

		@csrf

		<div class="field">
			<label for="title" class="label">Title</label>
			<input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }} " value="{{ old('title') }}" required>			
		</div>

		<div class="field">
			<label for="description" class="label">Project Description</label>
			<textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required>{{ old('description') }}</textarea>
		</div>

		<button type="submit" class="button is-link">Enter project</button>

		@if($errors->any())
			<div class="notification is-danger" style="margin-top: 40px;">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

	</form>

@endsection