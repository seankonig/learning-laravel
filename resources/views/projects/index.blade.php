@extends('layout')

@section('title', 'Projects')
	
@section('content')
<div class="container">
	<div class="columns is-multiline is-mobile">
	@foreach ($projects as $project)
	
		<div class="column is-one-third">
			<div class="card">
				<div class="card-header">
					<div class="card-header-title">{{ $project->title }}</div>
				</div>
				<div class="card-content">
					{{ substr($project->description, 0, 45) }}...
				</div>
				<div class="card-footer">
					<a class="button is-dark" href="/projects/{{ $project->id }}">
						view
					</a>
				</div>	
			</div>
          
		</div>
				
	@endforeach
	</div>
	
</div>
@endsection