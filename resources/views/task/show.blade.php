@extends('layout')

@section('content')
    <h1>Project Name: {{ @$task->project->title }}</h1>
    <h2>Task Name: {{ $task->title }}</h2>
    <p>Task Number #{{ $task->id }}</p>
    <p>Status: {{ $task->status?'Done':'Not Yet' }}</p>
    <a href="/task">Back To Main Task List</a>
@endsection

