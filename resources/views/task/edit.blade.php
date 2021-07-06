@extends('layout')

@section('content')
    <form action="/task/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="project_id">Project</label>
            <select name="project_id">
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
            <input type="text" value="{{ $task->title }}" name="title">
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status">
                <option {{ $task->status=='0'?'selected':'' }} value="0">Not Yat</option>
                <option {{ $task->status=='1'?'selected':'' }} value="1">Done</option>
            </select>
        </div>
        <button type= "submit">Save</button>
    </form>
@endsection


