@extends('layout')

@section('title', 'Edit Projects')
	
@section('content')
	<div>
		<form method="POST" action="/projects/{{ $project->id }}">
			@csrf
			@method('PATCH')
			<div>
				<div>
					<label>Title</label>
				</div>
			<input type="text" name="title" value="{{ $project->title }}" />
			</div>

			<div>
				<div>
					<label>Description</label>
				</div>
				<textarea name="description">{{ $project->description }}</textarea>
			</div>

			<div>
				<button type="submit">Update</button>
			</div>
		</form>
	</div>

	<div>
		<form method="POST" action="/projects/{{ $project->id }}">
			@method('DELETE')
			@csrf
			<button type="submit">Remove</button>
		</form>
	</div>

	@if ($errors->any())
		<div>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
@endsection