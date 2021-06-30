<form action="/task" method="POST">
    @csrf
    <div>
        <label for="project_id">Project</label>
        <select name="project_id">
            @foreach ($projects as $project)
                <option value="{{ $project->id }}">
                    {{ $project->title }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="status">Status</label>
        <select name="status">
            <option value="0">Not Yat</option>
            <option value="1">Done</option>
        </select>
    </div>
    <button type= "submit">Save</button>
</form>
