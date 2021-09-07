@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('AbsenceId : ') }}{{$absence->id}}</div>

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
                    <form method="POST" class="form-prevent-multiple-submits" enctype="multipart/form-data" action="{{ route('absences.update',$absence->id) }}">
                        @csrf
                        @method('PUT')

                       
                       
                        <div class="form-group row">
                            <label for="date_du" class="col-md-4 col-form-label text-md-right">Date début de l'absence</label>

                            <div class="col-md-6">
                                <input id="date_du" type="date"  class="form-control @error('date_du') is-invalid @enderror" name="date_du" value="{{ $absence->date_du }}" required autocomplete="date_du" autofocus>
                                
                                @error('date_du')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_au" class="col-md-4 col-form-label text-md-right">Date fin de l'absence</label>

                            <div class="col-md-6">
                                <input id="date_au" type="date"  class="form-control @error('date_au') is-invalid @enderror" name="date_au" value="{{ $absence->date_au }}" required autocomplete="date_au" autofocus>
                                
                                @error('date_au')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" id="nombrejours" name="nombrejours"/>

                        <div class="form-group row">
                            <label for="cause" class="col-md-4 col-form-label text-md-right">Ajouter la cause de l'absence</label>

                            <div class="col-md-6">
                                <textarea id="cause" type="text" rows="3" class="form-control @error('cause') is-invalid @enderror" name="cause"  required autocomplete="cause" autofocus>{{ $absence->cause }}</textarea>
                                @error('cause')
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
var x4=document.getElementById("nombrejours");
var dd=( ((d1 - d2) / msPerDay).toFixed(0) );
x4.value=dd;
}

</script>

<div text_align="right">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input type="submit" id="nombrejours" class="btn btn-primary button-prevent-multiple-submits"  onclick="myFun()" value="Modifier"/>
                             
                                  
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
