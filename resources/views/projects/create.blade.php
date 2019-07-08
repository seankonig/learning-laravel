@extends('layout')

@section('title', 'Create Project')
	
@section('content')

	<form method="POST" action="/projects">
		@csrf
		
		<div>
			<input type="text" name="title" placeholder="Project Title" value="{{ old('title') }}" required/>
		</div>

		<div>
		<textarea name="description" placeholder="Project Description" required>{{ old('description') }}</textarea>
		</div>

		<div>
			<button type="submit">Create Project</button>
		</div>
	</form>	

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