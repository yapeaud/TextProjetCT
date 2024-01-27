@extends('template.boot')

@section('content')
<div class="container">
  @if(session()->has('successAdd'))
        <div class="alert alert-success mb-4"><h4>{{ session()->get('successAdd') }}</h4></div>
    @endif

    @if(session()->has('successDelete'))
        <div class="alert alert-success mb-4"><h4>{{ session()->get('successDelete') }}</h4></div>
    @endif

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>    
    @endif --}}
    <form class="form-signin" method="POST" action="/inscription">
      @csrf
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">S'inscrire</h1>
        <label for="inputNom" class="sr-only">Nom</label>
        <input type="text" id="inputNom" class="form-control" placeholder="Votre nom" required autofocus name="nom">
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Votre email" required autofocus name="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe" required name="mdp">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      </form>
</div>

@endsection