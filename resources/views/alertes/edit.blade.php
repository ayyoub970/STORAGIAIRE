@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modier une alerte ') }}</div>

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
                    <form method="POST" class="form-prevent-multiple-submits" enctype="multipart/form-data" action="{{ route('alertes.update',$alerte->id) }}">
                        @csrf
                        @method('PUT')

                       
                       
                       
                        
                      

                        
                         

                        <div class="form-group row">
                            <label for="contenu" class="col-md-4 col-form-label text-md-right">Contenu de l'alerte</label>

                            <div class="col-md-6">
                                <textarea id="contenu" type="text" rows="3" class="form-control @error('contenu') is-invalid @enderror" name="contenu"  required autocomplete="contenu" autofocus>{{ $alerte->contenu }}</textarea>
                                @error('contenu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>     
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status de l'alerte</label>

                            <div class="col-md-6">
                            <input type="checkbox"  data-toggle="toggle" data-onstyle="danger" name="status" 
                        value="{{$alerte->status}}" {{$alerte->status || old('status',0) === 1 ? 'checked': ''}} />
                        
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
                            <input type="submit" id="nombrejours" class="btn btn-primary button-prevent-multiple-submits"  onclick="" value="Suivant"/>
                             
                                  
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
