<a href="/project/create">New Project</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>
                {{$project->id}}
            </td>
            <td>
                {{$project->title}}
            </td>
            <td>
                <a href="/project/{{ $project->id }}">Show</a>
                <a href="/project/{{ $project->id }}/edit">Edit</a>
                <form method="POST" action="project/{{ $project->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
