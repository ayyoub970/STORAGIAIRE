@extends('layouts.index')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un rapport de stage') }}
                    </div>
                <div class="card-body">
                
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
                        
                            <form method="POST" enctype="multipart/form-data" class="form-prevent-multiple-submits" action="{{ route('rapports.store') }}">
                            @csrf
                                <div class="form-group row">
                                    <label for="stages_id" class="col-md-4 col-form-label text-md-right">{{ __('StageId') }}</label>
                                        <div class="col-md-6 ">
                                            <select class="select2" name="stage_id" style="width: 100%;">
                                                @foreach ($xxx as $x)
                                                <option  value="{{ $x->id }}">{{ $x->id }} </option>
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
                                    <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>
                                       <div class="col-md-6" >
                                            <input  type="text"   class="form-control @error('titre') is-invalid @enderror" name="titre" required autocomplete="titre" autofocus>
                                                @error('titre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                </div>



                                <div class="form-group row">
                                    <label for="EncadrantPro" class="col-md-4 col-form-label text-md-right">{{ __('Encadrant Professionnel') }}</label>
                                       <div class="col-md-6" >
                                            <input  type="text"   class="form-control @error('EncadrantPro') is-invalid @enderror" name="EncadrantPro" required autocomplete="EncadrantPro" autofocus>
                                                @error('EncadrantPro')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                </div>
                                

                                <div class="form-group row">
                                    <label for="EncadrantPed" class="col-md-4 col-form-label text-md-right">{{ __('Encadrant Pédagogique') }}</label>
                                       <div class="col-md-6" >
                                            <input  type="text"   class="form-control @error('EncadrantPed') is-invalid @enderror" name="EncadrantPed" required autocomplete="EncadrantPed" autofocus>
                                                @error('EncadrantPed')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                </div>




                                <div class="form-group row">
                                    <label for="Sommaire" class="col-md-4 col-form-label text-md-right">{{ __('Sommaire') }}</label>
                                       <div class="col-md-6" >
                                            <textarea  type="text"   class="form-control @error('Sommaire') is-invalid @enderror" name="Sommaire" rows="10" required autocomplete="Sommaire" autofocus></textarea>
                                                @error('Sommaire')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                </div>



                                <div class="form-group row">
                                    <label for="rapport" class="col-md-4 col-form-label text-md-right">{{ __('Rapport') }}</label>
                                        <div class="col-md-6" id="resume_link">
                                            <input  type="file" accept="application/pdf"  class="form-control @error('rapport') is-invalid @enderror" name="rapport"  required autocomplete="rapport" autofocus>
                                                 @error('rapport')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                </div>
                                
                                <div text_align="right">
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <input type="submit" id="duree" class="btn btn-primary button-prevent-multiple-submits"  value="Suivant"/>
                                        </div>
                                    </div>
                                </div>
                                     <br>
                            </form>
                        
                    
                </div>
            </div>
        </div>
   </div>
</div>
       @endsection
