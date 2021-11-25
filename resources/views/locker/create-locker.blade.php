@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Créer un nouveau casier</h2>
    <form action="/locker/create" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="number" class="form-label">Numéro</label>
            <input type="text" class="form-control" id="number" name="number" placeholder="Numéro du casier" value="{{ old('number') }}">
            @if($errors->has('number'))
            {{ $errors->first('number') }}
            @endif
        </div>
        <div class="mb-3">
            <label for="floorNumber" class="form-label">Numéro d'étage</label>
            <input type="text" class="form-control" id="floorNumber" name="floorNumber" placeholder="Numéro de l'étage" value="{{ old('floorNumber') }}">
            @if($errors->has('floorNumber'))
            {{ $errors->first('floorNumber') }}
            @endif
        </div>

        <input type="submit" value="Enregistrer">
    </form>
</div>
@endsection