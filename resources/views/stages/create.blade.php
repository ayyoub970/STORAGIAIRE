@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un stage') }}</div>

                <div class="card-body">

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                @if ($message = Session::get('success'))
                   <div class="alert alert-danger">
                   <p>{{ $message }}</p>
                   </div>
                   @endif

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
                    <form method="POST" class="form-prevent-multiple-submits" action="{{ route('stages.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="stagiaire_id" class="col-md-4 col-form-label text-md-right">{{ __('Stagiaire') }}</label>

                            <div class="col-md-6">
                                <select id="stagiaire_id" name="stagiaire_id" class="form-control select2"> 
                                <option  value="">Selectionner un stagiaire</option>
                                @foreach ($stagiaires as $stagiaire)
                            
                                <option  value="{{ $stagiaire->id }}">{{ $stagiaire->id }} : {{ $stagiaire->nom }} </option>
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
                            <label for="type" class="col-md-4 col-form-label text-md-right">Type de stage</label>

                            <div class="col-md-6">
                                <select id="type" name="type" class="form-control "> 
                                <option  value="Stage PFE">Stage PFE</option>
                                <option  value="Stage d'embauche">Stage d'embauche</option>
                                <option  value="Stage rémunéré">Stage rémunéré</option>
                                </select> 
                                
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="date_du" class="col-md-4 col-form-label text-md-right">{{ __('Date de début') }}</label>

                            <div class="col-md-6">
                                <input id="date_du" type="date" class="form-control @error('date_du') is-invalid @enderror" name="date_du" value="" required autocomplete="date_du">

                                @error('date_du')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_au" class="col-md-4 col-form-label text-md-right">{{ __('Date de fin') }}</label>

                            <div class="col-md-6">
                                <input id="date_au" type="date" class="form-control @error('date_au') is-invalid @enderror" name="date_au" value="" required autocomplete="date_au" autofocus>

                                @error('date_au')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
           
                        <input type="hidden" id="duree" name="duree"/>



                        <div class="form-group row">
                            <label for="etablissement" class="col-md-4 col-form-label text-md-right">{{ __('Etablissement') }}</label>

                            <div class="col-md-6">
                                <input id="etablissement" type="text" class="form-control @error('etablissement') is-invalid @enderror" name="etablissement" value="" required autocomplete="etablissement" autofocus>

                                @error('etablissement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


 
                        
                           <div class="form-group row">
                            <label for="formation" class="col-md-4 col-form-label text-md-right">{{ __('Formation') }}</label>

                            <div class="col-md-6">
                                <input id="formation" type="text" class="form-control @error('formation') is-invalid @enderror" name="formation" value="" required autocomplete="formation" autofocus>

                                @error('formation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $formation }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="intitule_projet" class="col-md-4 col-form-label text-md-right">{{ __('Intitulé du projet') }}</label>

                            <div class="col-md-6">
                                <input id="intitule_projet" type="text" class="form-control @error('intitule_projet') is-invalid @enderror" name="intitule_projet" value="" required autocomplete="name" autofocus>

                                @error('intitule_projet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description_projet" class="col-md-4 col-form-label text-md-right">{{ __('Description du projet') }}</label>

                            <div class="col-md-6">
                                <input id="description_projet" type="text" class="form-control @error('description_projet') is-invalid @enderror" name="description_projet" value="" required autocomplete="name" autofocus>

                                @error('description_projet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <script>

                        function myFun() {

var x2=document.getElementById("date_au").value;
var x3=document.getElementById("date_du").value;
var msPerDay = 1000*60*60*24;
d1=new Date(x2);
d2=new Date(x3);
var x4=document.getElementById("duree");
var dd=( ((d1 - d2) / msPerDay).toFixed(0) );
    x4.value=dd;
    }
   
</script>
<div text_align="right">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit" id="duree" class="btn btn-primary button-prevent-multiple-submits" onclick="myFun()" value="Suivant"/>
                             
                                  
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
