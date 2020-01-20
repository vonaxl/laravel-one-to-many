@extends('layouts.base')
@section('employee')
    @foreach ($emps as $emp)
        <div class="box">
            <div class="close">
                {{-- <a href="{{ route('employee.destroy',$emp -> id ,$elem = 'e') }}">x</a> --}}
            </div>
            [{{$emp -> id}}]
            {{ $emp -> name }} {{ $emp -> lastname}} 
            [task done : {{ $emp -> tasks() -> count() }} ] <br>
            <ul>
                @foreach ($emp ->tasks as $task)
                    <li>
                        {{$task -> name}} 
                    </li>
                @endforeach
                
            </ul>

        </div>
        
    @endforeach
@endsection

@section('task')
    @foreach ($tasks as $task)
    <div class="box">
        <div class="close">
            {{-- <a href="{{ route('employee.destroy', $task -> id , $elem = 't') }}">x</a> --}}
        </div>
        Task name: {{ $task -> name }} <br>
        Date: {{ $task -> start_date }} <br>
        Employee : {{$task -> employee -> name}} [{{$task -> employee -> id}}]
    </div>
    @endforeach
@endsection 