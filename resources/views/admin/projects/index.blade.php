@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Index Projects</h1>
        <div class="text-end">
            <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Crea nuovo Progetto</a>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tecnologia</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->type->name }}</th>
                        <td>{{ $project->title }}</td>
                        <td><img class="img-thumbnail" style="width:100px" src="{{ $project->image }}"
                                alt="{{ $project->title }}">
                        </td>
                        <td>{{ $project->created_at }}</td>
                        <td><a href="{{ route('admin.projects.show', $project) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.projects.edit', $project) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="delete-button" data-item-title="{{ $project->title }}"> <i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Torna alla dashboard</a>
    </div>
@endsection
