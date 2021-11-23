@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Afficher la liste des casiers</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Numéro du casier</th>
                <th scope="col">Date de création</th>
                <th scope="col">Date de dernière modification</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lockers as $locker)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$locker->number}}</td>
                <td>{{$locker->created_at}}</td>
                <td>{{$locker->updated_at}}</td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
@endsection