@extends('layout')

@section('content')
    <form action="/task" method="POST">
        @csrf
        <div>
            <label for="project_id">Project</label>
            <select name="project_id" class= "rounded border border-blue-500 bg-blue-100 text-blue-800">
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">
                        {{ $project->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title"
            class= "rounded border border-green-500 bg-green-100 text-green-800">
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" class= "rounded border border-red-500 bg-red-100 text-red-800">
                <option value="0">Not Yat</option>
                <option value="1">Done</option>
            </select>
        </div>
        <button class="p-1 m-1rounded border border-gray-500 bg-gray-100 text-gray-800" type= "submit">Save</button>
    </form>
@endsection


