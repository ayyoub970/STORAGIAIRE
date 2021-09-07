@extends('layouts.index')
@if(!empty($stages_id))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Ajouter une alerte pour le stage :') }}&nbsp<a href="{{route('stages.show',$stages_id)}}">{{$stages_id}}</a></div>

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
                    <form method="POST" class="form-prevent-multiple-submits" enctype="multipart/form-data" action="{{ route('alertes.store') }}">
                        @csrf

                        <input type="hidden" value="{{$stages_id}}" name="stage_id">
                       
                        <div class="form-group row">
                            <label for="date_creation" class="col-md-4 col-form-label text-md-right">Date de l'alerte</label>

                            <div class="col-md-6">
                                <input id="date_creation" type="date"  class="form-control @error('date_creation') is-invalid @enderror" name="date_creation" value="" required autocomplete="date_creation" autofocus>
                                
                                @error('date_creation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="status" value="1">
                      
                      
                        <div class="form-group row">
                            <label for="contenu" class="col-md-4 col-form-label text-md-right">Contenu de l'alerte</label>

                            <div class="col-md-6">
                                <textarea id="contenu" type="text" rows="3" class="form-control @error('contenu') is-invalid @enderror" name="contenu" value="" required autocomplete="contenu" autofocus></textarea>
                                @error('contenu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     


                      

<div text_align="right">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit" id="nombrejours" class="btn btn-primary"   value="Suivant"/>
                             
                                  
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
@else
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter une alerte pour un stage') }}</div>

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
                    <form method="POST" enctype="multipart/form-data" action="{{ route('alertes.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="stage_id" class="col-md-4 col-form-label text-md-right">{{ __('Liste des stages') }}</label>

                            <div class="col-md-6 ">
                                    
                                    <select class="select2" name="stage_id" style="width: 100%;">
                                    @foreach ($xxx as $x)
                                <option  value="{{ $x->id }}">{{ $x->intitule_projet}}  {{ __('de')}} {{ $x->nom }} </option>
                                @endforeach
                                    </select>
                              

                         
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                       
                        <div class="form-group row">
                            <label for="date_creation" class="col-md-4 col-form-label text-md-right">Date de l'alerte</label>

                            <div class="col-md-6">
                                <input id="date_creation" type="date"  class="form-control @error('date_creation') is-invalid @enderror" name="date_creation" value="" required autocomplete="date_creation" autofocus>
                                
                                @error('date_creation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="status" value="1">
                      
                      
                        <div class="form-group row">
                            <label for="contenu" class="col-md-4 col-form-label text-md-right">Contenu de l'alerte</label>

                            <div class="col-md-6">
                                <textarea id="contenu" type="text" rows="3" class="form-control @error('contenu') is-invalid @enderror" name="contenu" value="" required autocomplete="contenu" autofocus></textarea>
                                @error('contenu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     


                      

<div text_align="right">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit" id="nombrejours" class="btn btn-primary button-prevent-multiple-submits"   value="Suivant"/>
                             
                                  
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
@endif