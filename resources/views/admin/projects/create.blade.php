@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Inserisci nuovo Progetto</h1>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna ai progetti</a>
        </div>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="type_id">Tecnologia</label>
                <select class="form-control" name="type_id" id="type_id">
                    <option value="">Seleziona tecnologia</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image">URL Immagine</label>
                <input type="url" class="form-control" name="image" id="image">

            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="10" class="form-control"></textarea>

            </div>

            <button type="submit" class="btn btn-success">Salva</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </div>
@endsection
