@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Edit Project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $project['title'] }}">
            </div>
            <div class="mb-3">
                <label for="image">Image url</label>
                <input type="url" class="form-control" name="image" id="image" value="{{ $project['image'] }}">

            </div>
            <div class="mb-3">
                <label for="body">Description</label>
                <textarea name="body" id="body" rows="10" class="form-control">{{ $project['description'] }}</textarea>

            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </div>
@endsection
