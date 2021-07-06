@extends('layout')

@section('content')
    <form action="/project" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title"
        class="rounded border border-green-500 bg-green-100 text-green-800">
    </div>
    <button type= "submit">Save</button>
</form>
@endsection


