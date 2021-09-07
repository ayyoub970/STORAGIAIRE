@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modier une Annonce ') }}</div>

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
                    <form method="POST" class="form-prevent-multiple-submits" enctype="multipart/form-data" action="{{ route('annonces.update',$annonce->id) }}">
                        @csrf
                        @method('PUT')

                       
                       
                       
                        
                      

                        
                         

                        <div class="form-group row">
                            <label for="contenu" class="col-md-4 col-form-label text-md-right">Contenu de l'annonce</label>

                            <div class="col-md-6">
                                <textarea id="contenu" type="text" rows="10" class="form-control @error('contenu') is-invalid @enderror" name="annonce"  required autocomplete="contenu" autofocus>{{ $annonce->annonce }}</textarea>
                                @error('contenu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     
                        <div class="form-group row">
                            <label for="etat" class="col-md-4 col-form-label text-md-right">Status de l'annonce</label>

                            <div class="col-md-6">
                            <input type="checkbox"  data-toggle="toggle" data-onstyle="danger" name="etat" 
                        value="{{$annonce->etat}}" {{$annonce->etat || old('etat',0) === 1 ? 'checked': ''}} />
                        
                                  @error('contenu')
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
                                <option  value="Stage PFE" {{ $annonce->type== "Stage PFE" ? 'selected' : ''}}>Stage PFE</option>
                                <option  value="Stage d'embauche" {{ $annonce->type== "Stage d'embauche" ? 'selected' : ''}}>Stage d'embauche</option>
                                <option  value="Stage rémunéré" {{ $annonce->type== "Stage rémunéré" ? 'selected' : ''}}>Stage rémunéré</option>
                                <option  value="tt" {{ $annonce->type== "tt" ? 'selected' : ''}}>Tous les stages</option>
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
                            <input type="submit" id="" class="btn btn-primary button-prevent-multiple-submits"  onclick="" value="Suivant"/>
                             
                                  
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
