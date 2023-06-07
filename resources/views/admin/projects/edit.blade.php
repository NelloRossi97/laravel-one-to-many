@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Edit Project</h1>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $project['title'] }}">
            </div>
            <div class="mb-3">
                <label for="type_id">Tecnologia</label>
                <select class="form-control" name="type_id" id="type_id">
                    <option value="">Seleziona tecnologia</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}"
                            {{ $type->id == old('type_id', $project->type_id) ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
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
