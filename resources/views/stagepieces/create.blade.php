@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter les pièces de stage') }}</div>

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
                    <form method="POST" enctype="multipart/form-data" class="form-prevent-multiple-submits" action="{{ route('stagepieces.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="stages_id" class="col-md-4 col-form-label text-md-right">{{ __('StageID') }}</label>

                            <div class="col-md-6 ">
                                    
                                    <select class="select2" name="stages_id" style="width: 100%;">
                                    <option  value="">Selectionner un stage</option>
                                    @foreach ($xxx as $x)
                                <option  value="{{ $x->id }}">{{ $x->id}}  {{ __(' : ')}} {{ $x->intitule_projet }} </option>
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
                            <label for="CV" class="col-md-4 col-form-label text-md-right">{{ __('Circculum vitae') }}</label>

                            <div class="col-md-6" id="resume_link">
                                <input id="resume" type="file"  accept="application/pdf"  class="form-control @error('CV') is-invalid @enderror" name="CV"    autocomplete="CV" autofocus>

                                @error('CV')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="DS" class="col-md-4 col-form-label text-md-right">{{ __('Demande de Stage') }}</label>

                            <div class="col-md-6" id="resume_link">
                                <input  type="file" accept="application/pdf"  class="form-control @error('DS') is-invalid @enderror" name="DS"    autocomplete="DS" autofocus>

                                @error('DS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CIN" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>

                            <div class="col-md-6" id="resume_link">
                                <input type="file"  accept="application/pdf" class="form-control @error('CIN') is-invalid @enderror" name="CIN"    autocomplete="CIN" autofocus>

                                @error('CIN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="AS" class="col-md-4 col-form-label text-md-right">{{ __('Assurance Stage') }}</label>

                            <div class="col-md-6" id="resume_link">
                                <input type="file"  accept="application/pdf" class="form-control @error('AS') is-invalid @enderror" name="AS"   autocomplete="AS" autofocus>

                                @error('AS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CS" class="col-md-4 col-form-label text-md-right">{{ __('Convention de stage') }}</label>

                            <div class="col-md-6" id="resume_link">
                                <input  type="file" accept="application/pdf" class="form-control @error('CS') is-invalid @enderror" name="CS"    autocomplete="CS" autofocus>

                                @error('CS')
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
