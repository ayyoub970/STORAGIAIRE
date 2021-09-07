@extends('layouts.index1')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <h3>AbsenceId  : {{$absences[0]->id}}</h3></div>

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
            <td>Stagiaire_id</td>
            <td><a >{{ $absences[0]->stagiaire_id }}</a></td>  
        </tr>
        
            <tr>
            <td>Début de l'absence</td>
            <td>{{ $absences[0]->date_du }}</td>  
        </tr>
        <tr>
            <td>Fin de l'absence</td> 
            
            <td>{{ $absences[0]->date_au}}</td> 
        </tr>
        <tr>
            <td>Durée de l'absence</td> 
            
            <td>{{ $absences[0]->nombrejours}}</td> 
        </tr>
        <tr>
            <td>Cause de l'absence</td> 
            
            <td>{{ $absences[0]->cause}}</td> 
        </tr>
        <tr>
            <td>Date de création</td> 
            
            <td>{{ $absences[0]->created_at}}</td> 
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
                        <a  type="button" href ="{{route('espacestagiaires.mesabsences')}}"class="btn btn-primary">Retour</a>
                    </div>
                </div >
            </div >
        </div >
    </div >
</div >
@endsection