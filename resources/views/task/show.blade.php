@extends('layout')

@section('content')
    <div><span class="text-md">Project Name:</span><span class="text-xl"> {{ @$task->project->title }}</span></div>
    <div><span class="text-md">Task Name:</span><span class="text-xl"> {{ $task->title }}</span></div>
    <div><span class="text-md">Task Number #</span><span class="text-xl">{{ $task->id }}</span></div>
    <div class="mb-3"><span class="text-md">Status:</span><span class="text-xl"> {{ $task->status?'Done':'Not Yet' }}</span></div>
    <a href="/task">Back To Main Task List</a>
@endsection

