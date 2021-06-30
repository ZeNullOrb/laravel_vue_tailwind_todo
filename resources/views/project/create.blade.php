<form action="/project" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <button type= "submit">Save</button>
</form>
