@extends('layouts.index')

@if(!empty($stages_id))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter une tache le stage : ') }}{{$stages_id}}</div>

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
                    <form method="POST" enctype="multipart/form-data" class="form-prevent-multiple-submits" action="{{ route('tache.store') }}">
                        @csrf

                       <input type="hidden" name="stage_id" value="{{$stages_id}}">
                       <input type="hidden" name="progress" value="0">
                        <div class="form-group row">
                            <label for="tacheafaire" class="col-md-4 col-form-label text-md-right">{{ __('Ajouter une tache') }}</label>

                            <div class="col-md-6">
                                <textarea id="tacheafaire" type="text" rows="3" class="form-control @error('tacheafaire') is-invalid @enderror" name="tacheafaire" value="" required autocomplete="tache" autofocus></textarea>
                                @error('tache')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                
                        <div class="form-group row">
                            <label for="date_tache" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date_tache" type="date" class="form-control @error('date_tache') is-invalid @enderror" name="date_tache" value="" required autocomplete="date_tache" autofocus>

                                @error('date_tache')
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
                <div class="card-header">{{ __('Ajouter une tache pour un stage') }}</div>

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
                    <form method="POST" enctype="multipart/form-data" class="form-prevent-multiple-submits" action="{{ route('tache.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="stages_id" class="col-md-4 col-form-label text-md-right">{{ __('StageId') }}</label>

                            <div class="col-md-6 ">
                                    
                                    <select class="select2" name="stage_id" style="width: 100%;">
                                    <option value="" >StageId</option> 
                                    @foreach ($xxx as $x)
                                <option  value="{{ $x->id }}">{{ $x->id }} &nbsp&nbsp({{ $x->nom }} : {{ $x->stagiaire_id }}) </option>
                                @endforeach
                                    </select>
                              

                         
                                @error('stage_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <input type="hidden" name="progress" value="0">
                       
                        <div class="form-group row">
                            <label for="tacheafaire" class="col-md-4 col-form-label text-md-right">{{ __('Ajouter une tache') }}</label>

                            <div class="col-md-6">
                                <textarea id="tacheafaire" type="text" rows="3" class="form-control @error('tacheafaire') is-invalid @enderror" name="tacheafaire" value="" required autocomplete="tache" autofocus></textarea>
                                @error('tache')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <label for="date_tache" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date_tache" type="date" class="form-control @error('date_tache') is-invalid @enderror" name="date_tache" value="" required autocomplete="date_tache" autofocus>

                                @error('date_tache')
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
                            </div> </div> <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@endif

