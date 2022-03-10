{{--
Auteur : Vincenzo Di Fonte
Classe : CIN4A
ETML : École Technique des Métiers de Lausanne
Description de la page :  Cette page est la vue html de la page de création d'un étudiant
--}}
@extends('layouts.app')

@section('content')
    <h1>Ajouter Un élève</h1>

    <form method="POST" action="/addStudent">
    <!-- csrf permet de sécuriser le formulaire -->
    @csrf
    <label for="nom">Nom de l'élève : </label>
    <input type="text" name="nom" >
    @if($errors->has('nom'))
    {{ $errors->first('nom') }}
    @endif
<br><br>
    <label for="prenom">Prénom de l'élève : </label>
    <input type="text" name="prenom">
    @if($errors->has('prenom'))
    {{ $errors->first('prenom') }}
    @endif
<br><br>
    <label for="classe">Classe l'élève : </label>
    <input type="text" name="classe">
    @if($errors->has('classe'))
    {{ $errors->first('classe') }}
    @endif
<br><br>
    <button type="submit">Ajouter l'élève</button>

@endsection