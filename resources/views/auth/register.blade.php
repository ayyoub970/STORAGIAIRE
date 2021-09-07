@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html">STOR<b>ACT</b>IVE</a>
  </div>
<div class="card">
    <div class="card-body register-card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Il y a eu quelques problèmes avec votre saisie.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
      <p class="login-box-msg">Ajouter un compte utilisateur</p>

      <form action="{{ route('register') }}" class="form-prevent-multiple-submits" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control"required  name="nom" placeholder="Nom complet">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" required name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" required name="cin" placeholder="CIN">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nom_utilisateur" required placeholder="Nom d'utilisateur">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <input type="hidden" name="stagiaire_id" value="0">
          <input type="hidden" name="role" value="0">
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Retype password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
           
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block button-prevent-multiple-submits">Enregistrer</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

         </div>
    <!-- /.form-box -->
    </div></div></div></div>
@endsection
