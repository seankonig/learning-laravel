@extends('layout')

@section('title', 'Show Stuff')
	
@section('content')
<section class="container"> 
    <div class="column auto">
		<div class="card">
		<div class="card-header is-primary">
      		<h1 class="card-header-title">
      		  {{ $project->title }}
	  		</h1>
		</div>
			<div class="card-content">
      		 	{{ $project->description }}
			</div>
	  		<div class="card-footer">
				<a class="button is-dark" href="/projects/{{ $project->id }}/edit">Edit</a>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="tile is-parent">
			<article class="tile is-child notification is-dark">
		  <h3 class="subtitle is-4">Project Tasks</h3>
		  <div class="container">
          	@if ($project->tasks)
				@foreach ($project->tasks as $task)
					<form method="POST" action="/tasks/{{ $task->id }}">
						@method('PATCH')
						@csrf
						<label class="checkbox {{ $task->completed ? 'isComplete' : '' }}" for="completed">
    						<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
							{{$task->description}}
  						</label>
					</form>
				@endforeach
				<div class="add-task-button">
					<button class="button is-light" type="submit">Add Task</button>	
				</div>		
				@else
				<button type="submit">Create Task</button>
			@endif
		  </div>
        </article>
		</div>
      	
	  
    </div>
</section>
	
@endsection