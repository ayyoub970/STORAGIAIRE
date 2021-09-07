@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Ajouter une annonce  :') }}</div>

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
                    <form method="POST" class="form-prevent-multiple-submits" enctype="multipart/form-data" action="{{ route('annonces.store') }}">
                        @csrf

                       
                       
            
                        <input type="hidden" name="etat" value="1">
                        <input type="hidden" name="user_id" value="{{$annonces}}">
                      
                        <div class="form-group row">
                            <label for="contenu" class="col-md-4 col-form-label text-md-right">Contenu de l'annonce</label>

                            <div class="col-md-6">
                                <textarea id="annonce" type="text" rows="10" class="form-control @error('contenu') is-invalid @enderror" name="annonce" value="" required autocomplete="contenu" autofocus></textarea>
                                @error('contenu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Announces pour : </label>

                            <div class="col-md-6">
                                <select id="type" name="type" class="form-control "> 
                                <option  value="Stage PFE">Stage PFE</option>
                                <option  value="Stage d'embauche">Stage d'embauche</option>
                                <option  value="Stage rémunéré">Stage rémunéré</option>
                                <option  value="tt">tous les stages</option>
                                </select> 
                                
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      

<div text_align="right">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit"  class="btn btn-primary button-prevent-multiple-submits"   value="Suivant"/>
                             
                                  
                                </button>
                            </div>
                            </div> </div> <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 

@endsection