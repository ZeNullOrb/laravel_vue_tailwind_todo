<a href="/task/create">New Task</a>
<table>
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
            <td>
                {{$task->title}}
            </td>
            <td>
                {{ $task->status?'Done':'Not Yet' }}
            </td>
            <td>
                <a href="/task/{{ $task->id }}">Show</a>
                <a href="/task/{{ $task->id }}/edit">Edit</a>
                <form method="POST" action="task/{{ $task->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
