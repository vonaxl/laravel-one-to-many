@extends('layouts.base')
@section('employee')
    <h1>Employee: {{ $emps -> count() }}</h1>
    <ul>
        @foreach ($emps as $emp)
            <li>
                {{ $emp -> name }} {{ $emp -> lastname}} 
                [task done : {{ $emp -> tasks() -> count() }} ] <br>
                <ul>
                    @foreach ($emp ->tasks as $task)
                        <li>
                            {{$task -> name}}
                        </li>
                    @endforeach
                    
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
@section('task')
<h1>Tasks: {{ $tasks -> count() }}</h1>
<ul>
    @foreach ($tasks as $task)
        <li>
            Task name: {{ $task -> name }} <br>
            Description: {{ $task -> description }} <br>
            Date: {{ $task -> start_date }} <br>
            Employee : {{$task -> employee -> name}}
        </li>
    @endforeach
</ul>
@endsection 