@extends('layout')

@section('content')
    <form action="/task/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="project_id">Project</label>
            <select name="project_id" class= "rounded border border-gray-500 bg-gray-100 text-gray-800">
                @foreach ($projects as $project)
                    <option
                        {{ $task->project_id==$project->id?'selected':'' }}
                        value="{{ $project->id }}">
                        {{ $project->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="title">Title</label>
            <input class="rounded border border-gray-800 mr-1" type="text" value="{{ $task->title }}" name="title">
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" class= "rounded border border-blue-500 bg-blue-100 text-blue-800">
                <option {{ $task->status=='0'?'selected':'' }} value="0">Not Yat</option>
                <option {{ $task->status=='1'?'selected':'' }} value="1">Done</option>
            </select>
        </div>
        <button class="p-1 m-1rounded border border-green-500 bg-green-100 text-green-800" type= "submit">Save</button>
    </form>
@endsection


