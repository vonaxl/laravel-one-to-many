@extends('layouts.base')
@section('content')
<h1>Tasks: {{ $tasks -> count() }}</h1>
<ul>
    @foreach ($tasks as $task)
        <li>
            task name: {{ $task -> name }} <br>
            task description: {{ $task -> description }} <br>
            {{ $task -> start_date }} <br>
            employee : {{$task -> employee -> name}}
        </li>
    @endforeach
</ul>
@endsection 