@extends('layouts.index1')


@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Ajouter une tache') }}</div>

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
                    <form method="POST" class="form-prevent-multiple-submits" enctype="multipart/form-data" action="{{route('espacestagiaires.storetache')}}">
                        @csrf

                       <input type="hidden" name="stage_id" value="{{$stages[0]->id}}">
                       <input type="hidden" name="progress" value="0">
                       
                        <div class="form-group row">
                            <label for="tacheafaire" class="col-md-4 col-form-label text-md-right">{{ __('La tache') }}</label>

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
