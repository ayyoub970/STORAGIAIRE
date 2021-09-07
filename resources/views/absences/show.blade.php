@extends('layouts.index')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <h3>AbsenceId  : {{$absence->id}}</h3></div>

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
            <td>AbsenceId</td>
            <td>{{ $absence->id }}</td>  
        </tr>
      
  <tr>
            <td>StageId</td>
            <td><a href="{{route('stages.show',$absence->stage_id)}}">{{ $absence->stage_id }}</a></td>  
        </tr>
        
            <tr>
            <td>Début de l'absence</td>
            <td>{{ $absence->date_du }}</td>  
        </tr>
        <tr>
            <td>Fin de l'absence</td> 
            
            <td>{{ $absence->date_au}}</td> 
        </tr>
        <tr>
            <td>Durée de l'absence</td> 
            
            <td>{{ $absence->nombrejours}}</td> 
        </tr>
        <tr>
            <td>Cause de l'absence</td> 
            
            <td>{{ $absence->cause}}</td> 
        </tr>
        <tr>
            <td>Date de création</td> 
            
            <td>{{ $absence->created_at}}</td> 
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
        <div class="col-md-6">
        <div class="card">
                <div color="" class="card-header">
<form action="{{ route('absences.destroy',$absence->id) }}" method="POST">
@csrf
   <a class="btn btn-info" href="{{ route('absences.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('absences.edit',$absence->id) }}">Modifier</a>

   
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
</div >
</div >
</div >
</div >
</div >
@endsection