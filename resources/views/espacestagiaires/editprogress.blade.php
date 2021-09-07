@extends('layouts.index1')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <?php   
        $a=$tache[0]->date_tache;
        $c=date_create(now());     
        $b=date_format($c,'Y-m-d');
                      ?>
                           @if($a >= $b)
                <div class="card-header">{{ __("Préciser l'état d'avancement de cette tache :") }}{{$tache[0]->id}}</div>

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


                    <form method="POST"  class="form-prevent-multiple-submits" action="{{ route('espacestagiaires.updateprogress',$tache[0]->id) }}">
                        @csrf
                        @method('PUT')

                   
          
              <div class="form-group row">
                            <label for="progress" class="col-md-4 col-form-label text-md-right">{{ __('% Progress') }}</label>

                            <div class="col-md-6">
                                <input id="progress" type="number" min="0" max="100" class="form-control @error('progress') is-invalid @enderror" value="{{$tache[0]->progress}}"  name="progress" value="" required autocomplete="progress" autofocus>

                                @error('progress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<div text_align="right">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                     
                           <input type="submit" id="" class="btn btn-primary button-prevent-multiple-submits"  value="Modifier"/>
                            @else   
                            <BR>
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> C'est trop tard.<br><br>
       
                            </div>   
                            @endif      
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
