@extends('layouts.app')

@section('content')

<table>
    <tr>
        <th>id</th>
        <th>task</th>
    </tr>

    @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->task}}</td>
        </tr>
    @endforeach

</table>

@endsection
