@extends('layout')

@section('title', 'Laravel')

@section('content')

<div class="container">
    <div class="columns">
    
    @foreach ($tasks as $task)
    
        
  

        <li>{{ $task }}</li>
    @endforeach
    
</div>
</div>

@endsection