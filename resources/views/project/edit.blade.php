<form action="/project/{{ $project->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" value="{{ $project->title }}" name="title">
    </div>
    <button type= "submit">Save</button>
</form>
