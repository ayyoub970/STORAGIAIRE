@extends('layouts.index')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier un utilisateur') }}</div>

                <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form method="POST" class="form-prevent-multiple-submits" action="{{ route('users.update',$user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $user->nom }}" placeholder="nom" required autocomplete="name" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" placeholder="email" name="email" value="" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cin" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>

                            <div class="col-md-6">
                                <input id="cin" type="text" class="form-control @error('cin') is-invalid @enderror"value="{{ $user->cin }}" placeholder="cin" name="cin" value="" required autocomplete="name" autofocus>

                                @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="nom_utilisateur" class="col-md-4 col-form-label text-md-right">{{ __('nom_utilisateur') }}</label>

                            <div class="col-md-6">
                                <input id="nom_utilisateur" type="text" class="form-control @error('nom_utilisateur') is-invalid @enderror"value="{{ $user->nom_utilisateur }}" placeholder="nom_utilisateur" name="nom_utilisateur" value="" required autocomplete="nom_utilisateur" autofocus>

                                @error('nom_utilisateur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                            @if($user->stagiaire_id === 0)
                                <select id="type" name="role" class="form-control "> 
                                <option  value="0" {{ $user->role== 0 ? 'selected' : ''}}>Activé</option>
                                <option  value="-1" {{ $user->role== -1 ? 'selected' : ''}}>Désactivé</option>
                                </select> 
                             @endif 
                             @if($user->stagiaire_id > 0)
                                <select id="type" name="role" class="form-control "> 
                                <option  value="1" {{ $user->role== 1 ? 'selected' : ''}}>Activé</option>
                                <option  value="-1" {{ $user->role== -1 ? 'selected' : ''}}>Désactivé</option>
                                </select> 
                             @endif 
                               
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       


                   


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info button-prevent-multiple-submits">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
