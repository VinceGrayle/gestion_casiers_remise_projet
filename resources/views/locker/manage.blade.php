@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Afficher la liste des casiers</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Numéro du casier</th>
                <th scope="col">Numéro d'étage</th>
                <th scope="col">Date de création</th>
                <th scope="col">Date de dernière modification</th>
                <th scope="col">Nom de l'élève</th>
                <th scope="col">Prénom de l'élève</th>
                <th scope="col">Classe de l'élève</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lockers as $locker)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$locker->number}}</td>
                <td>{{$locker->floorNumber}}</td>
                <td>{{$locker->created_at}}</td>
                <td>{{$locker->updated_at}}</td>
                <td>{{$locker->student->lastname}}</td>
                <td>{{$locker->student->firstname}}</td>
                <td>{{$locker->student->class}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection