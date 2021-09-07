@extends('layouts.index')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier un rapport de stage') }}
                    </div>
                <div class="card-body">
                @if ($message = Session::get('success'))
                   <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                   </div>
                   @endif
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
                            <form method="POST" enctype="multipart/form-data" class="form-prevent-multiple-submits" action="{{ route('rapports.update',$rapport->id) }}">
                            @csrf
                            @method('PUT')
                       
                  <input type="hidden" name="stage_id" value="{{$rapport->stage_id}}" />
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>
                                       <div class="col-md-6" >
                                            <input  type="text"  value="{{ $rapport->titre }}" class="form-control @error('titre') is-invalid @enderror" name="titre" required autocomplete="titre" autofocus>
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
                                            <input  type="text" value="{{ $rapport->EncadrantPro }}"  class="form-control @error('EncadrantPro') is-invalid @enderror" name="EncadrantPro" required autocomplete="EncadrantPro" autofocus>
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
                                            <input  type="text"  value="{{ $rapport->EncadrantPed }}" class="form-control @error('EncadrantPed') is-invalid @enderror" name="EncadrantPed" required autocomplete="EncadrantPed" autofocus>
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
                                            <textarea  type="text"   class="form-control @error('Sommaire') is-invalid @enderror" name="Sommaire" rows="10" required autocomplete="Sommaire" autofocus>{{$rapport->Sommaire}} </textarea>
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
                                            <input  type="file" accept="application/pdf"  class="form-control @error('rapport') is-invalid @enderror" name="rapport"   autocomplete="rapport" autofocus>
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
