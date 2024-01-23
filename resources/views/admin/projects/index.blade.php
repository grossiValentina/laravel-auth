@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center pt-3">Lista dei Progetti</h2>
    </div>

    <table class="table table-hover table-primary table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->titolo }}</td>
                    <td>{{ $project->descrizione }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
