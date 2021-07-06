@extends('layout')

@section('content')
    <div><span class="text-md">Project Name:</span><span class="text-xl">{{ $project->title }}</span></div>
    <div class="mb-3"><span class="text-md">Project Number #</span><span class="text-lg">{{ $project->id }}</span></div>
    <a class="mb-3 py-2 px-5 rounded bg-gray-100 text-gray-800" href="/project">Back To Main Project List</a>
@endsection

