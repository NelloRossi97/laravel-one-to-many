@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h3 class="mb-5">{{ $project->description }}</h3>
        <img src="{{ $project->image }}" alt="{{ $project->title }}" style="width: 80vw">
    </div>
@endsection
