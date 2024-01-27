@extends('template.boot')

@section('content')
<div class="container">
    <h1 class="text-center">Liste des étudiants </h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        
    @foreach ($etudiants as $etudiant)
      <tr>
        <th scope="row">{{ $etudiant->id }}</th>
        <td>{{ $etudiant->nom }}</td>
        <td>{{ $etudiant->email }}</td>
      </tr>
    @endforeach

    </tbody>
  </table>
</div>
@endsection