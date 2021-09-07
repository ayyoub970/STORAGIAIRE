@extends('layouts.index')

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
                    <form method="POST" class="form-prevent-multiple-submits" action="{{ route('tache.update',$tache->id) }}">
                        @csrf
                        @method('PUT')

                   
                       
                        <div class="form-group row">
                            <label for="tacheafaire" class="col-md-4 col-form-label text-md-right">{{ __('La tache') }}</label>

                            <div class="col-md-6">
                                <textarea id="tacheafaire" type="text" rows="3" class="form-control @error('tacheafaire') is-invalid @enderror" name="tacheafaire" value="" required autocomplete="tacheafaire" autofocus>{{ $tache->tacheafaire }}</textarea>
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
                                <input id="date_tache" type="date" class="form-control @error('date_tache') is-invalid @enderror" name="date_tache" value="{{ $tache->date_tache }}" required autocomplete="date_tache" autofocus>

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
                            <input type="submit" id="duree" class="btn btn-primary button-prevent-multiple-submits"  value="Modifier"/>
                             
                                  
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
