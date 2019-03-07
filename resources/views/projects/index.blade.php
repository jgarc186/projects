@extends('layout')

@section('title', 'Home')

@section('content')

	<h1 class="title">Projects</h1>

	@if($projects->count())
	<ul>
	@foreach($projects as $project)
		<li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
	@endforeach
	</ul>
	@else
		<strong>At the moment there are no projects to see...</strong>
	@endif

	<div class="field" style="margin-top: 20px;">
		<a class="button is-link" href="/projects/create">Make a new Project</a>		
	</div>

@endsection
