@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between p-5">
            <h2>Lista dei Progetti</h2>
            <a class="btn btn-success text-center" href="{{ route('admin.projects.create') }}">Nuovo Progetto</a>
        </div>

        <table class="table table-hover table-primary table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Selezione</th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->titolo }}</td>
                        <td>{{ $project->descrizione }}</td>
                        <td>
                            <a class="btn btn-success"
                                href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Dettagli</a>
                        </td>
                        <td>
                            <a class="btn btn-warning"
                                href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">Modifica</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
