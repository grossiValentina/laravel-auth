@extends('layouts.admin')
@section('content')

<div class="container">
    <h2 class="text-center p-3">Crea un nuovo Progetto</h2>

    <div class="row pt-3">
        <div class="col-6">

            <form class="" action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="titolo" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="titolo" name="titolo" value="{{ old('titolo') }}">

                  @error('titolo')
                  <div class="text-danger">inserisci di nuovo il titolo</div>
                  @enderror

                </div>

                <div class="mt-3 mb-3">
                    <label for="descrizione" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="descrizione" id="descrizione" rows="3">{{ old('descrizione') }}</textarea>
                </div>

                <button class="btn btn-success mt-4" type="submit" >Salva</button>

            </form>

        </div>
    </div>

    
</div>

@endsection