@extends('layouts.index1')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header text-center">
                <h3>TacheId  : {{ $tache[0]->id }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                   <div class="alert alert-success">
                   <p>{{ $message }}</p>
                   </div>
                   @endif

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
    
      
    </tr>
  </thead>
  <tbody>
  
      
  
        <tr>
            <td>StageId</td>
            <td>{{ $tache[0]->stage_id }}</td>  
        </tr>
  

  <tr>
            <td>tache</td>
            <td>{{ $tache[0]->tacheafaire }}</td>  
        </tr>
        <tr>
            <td>Progress</td>
            <td>{{ $tache[0]->progress }}%</td>  
        </tr>

        <tr>
            <td>Date de la tache</td> 
            
            <td>{{ $tache[0]->date_tache}}</td> 
        </tr>
        <tr>
            <td>Date de création</td> 
            
            <td>{{ $tache[0]->created_at}}</td> 
        </tr>
     
    
  </tbody>
</table>

              
                     </div>
            </div>

            </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 justify-content-center">
            <div class="card justify-content-center">
                <div color="" class="card-header justify-content-center">
                    <div class="text-center">
                        <a  type="button" href ="{{route('espacestagiaires.mestaches')}}"class="btn btn-primary">Retour</a>
                    </div>
                </div >
            </div >
        </div >
    </div >
</div >
@endsection