@extends('layouts.base')
@section('employee')
    <h1>Employee: {{ $emps -> count() }}</h1>
    <ul>
        @foreach ($emps as $emp)
            <li>
                {{ $emp -> name }} {{ $emp -> lastname}}:
                {{ $emp -> tasks() -> count() }}
            </li>
        @endforeach
    </ul>
@endsection
@section('task')
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