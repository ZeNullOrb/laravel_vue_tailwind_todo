@extends('layout')

@section('content')
    <a class="mb-3 py-2 px-5 rounded bg-gray-200 text-gray-800" href="/task/create">New Task</a>
    <table class="w-full">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Project ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    Status
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>
                    {{ $task->id }}
                </td>
                <td>
                    {{@$task->project->title}}
                </td>
                <td class="w-4/5 text-center">
                    {{$task->title}}
                </td>
                <td class="w-4/5 text-center">
                    {{ $task->status?'Done':'Not Yet' }}
                </td>
                <td>
                    <div class="flex">
                        <a class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href="/task/{{ $task->id }}">Show</a>
                        <a class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href="/task/{{ $task->id }}/edit">Edit</a>
                        <form method="POST" action="task/{{ $task->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection


