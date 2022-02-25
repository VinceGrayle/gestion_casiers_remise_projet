@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Créer un nouveau casier</h2>
    <form action="/locker/create" method="post">
        {{ csrf_field() }}
        <div class="mb-3">

            <div>
                <label for="number" class="form-label">Numéro</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Numéro du casier" value="{{ old('number') }}">
                @if($errors->has('number'))
                {{ $errors->first('number') }}
                @endif
            </div>
            <div>
                <label for="number" class="form-label">Prénom de l'étudiant</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom" value="{{ old('firstName') }}">
                @if($errors->has('firstName'))
                {{ $errors->first('firstName') }}
                @endif
            </div>
            <div>
                <label for="number" class="form-label">Nom de l'étudiant</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom" value="{{ old('lastName') }}">
                @if($errors->has('lastName'))
                {{ $errors->first('lastName') }}
                @endif
            </div>
            <input type="submit" value="Enregistrer">
    </form>
</div>
@endsection