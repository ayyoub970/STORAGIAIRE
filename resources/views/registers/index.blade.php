@extends('layouts.index')

@if(!empty($xxx))
@section('content')

<div class="container">
    <div class="row justify-content-center">
      
    <div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="{{route('home')}}">STOR<b>ACT</b>IVE</a>
  </div>
  <!-- User name -->
  @if ($errors->any())
    <div class="alert alert-danger">
       
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
  
                    @if ($message = Session::get('success'))
                   <div class="alert alert-danger">
                   <p>{{ $message }}</p>
                   </div>
                   @endif
  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
   
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form method="post" action="registerss" class="form-prevent-multiple-submits">
    @csrf 
      <div class="input-group">
        <select  class="form-control select2" name="stagiaireid" style="">
        <option  value="">Selectionner un stagiaire</option>
          @foreach ($xxx as $x)
      <option   value="{{$x->id}}">{{ $x->id }} : {{ $x->nom }} </option>
    
      @endforeach
          </select> 

        <div class="input-group-append">
          <button type="submit" id="register" name="register" class="btn button-prevent-multiple-submits">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  
</div>

  </div></div>
    
    @endsection
@endif
@if(!empty($yyy))
@section('content')


<div class="container">
  <div class="row justify-content-center">
      <div class="register-box">
        <div class="register-logo">
        <a href="{{route('home')}}">STOR<b>ACT</b>IVE</a>
      </div>
          <div class="card">
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
          @foreach ($yyy as $x)
            <div class="card-body register-card-body">
                <p class="login-box-msg">Ajouter un compte utilisateur pour :<br>
                <span style="text_center"><b>{{$x->nom}}<b><span></p>

                    <form action="{{route('register')}}" class="form-prevent-multiple-submits" method="post">
        @csrf
                       
                              
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" value="{{ $x->email }}" name="email" placeholder="Email">
                              <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-envelope"></span>
                                    </div>
                              </div>
                            </div>
                    <div class="input-group mb-3">
            <input type="text" class="form-control" name="cin" value="{{ $x->cin }}" placeholder="CIN">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="nom_utilisateur" type="text" class="form-control" name="nom_utilisateur" placeholder="Nom d'utilisateur">
            
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <span id="error_email"></span>
          </div>
        
          <input type="hidden" name="nom" value="{{$x->nom}}">
          <input type="hidden" name="stagiaire_id" value="{{$x->id}}">
          <input type="hidden" name="role" value="1">

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
        @endforeach
        <div class="row">
          <div class="col-7">
           
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button  id="register" name="register" class="btn btn-primary btn-block button-prevent-multiple-submits">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
     
         </div>
    <!-- /.form-box -->
    </div></div></div></div>

    
  
  
  @endsection

@endif

