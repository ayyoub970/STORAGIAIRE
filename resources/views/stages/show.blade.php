@extends('layouts.index')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
                <div color="" class="card-header">
   
   <div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Taches
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ url('/listesdestaches',$stage->id) }}">afficher les taches</a>
    <a class="dropdown-item" href="{{ url('/createtache',$stage->id) }}">Ajouter une tache</a>
   
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Absences
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ url('/listesdesabsences',$stage->id) }}">Afficher les absences</a>
    <a class="dropdown-item" href="{{ url('/createabsence',$stage->id) }}">Ajouter une absence</a>
 
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Alertes
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ url('/listesdesalertes',$stage->id) }}">Afficher les alertes</a>
    <a class="dropdown-item" href="{{ url('/createalerte',$stage->id) }}">Ajouter une alerte</a>
 
  </div>
</div>
  
</div >
</div >
</div >
</div >
</div >



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <h3>Informations de stage de  : {{ $xxx[0]->nom }}</h3></div>

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
            <td>Stage_id</td>
            <td>{{ $stage->id }}</td>  
        </tr> 
  
  <tr>
            <td>Stagiaire_id</td>
            <td><a href="{{route('stagiaires.show',$xxx[0]->id)}}">{{ $xxx[0]->id }}</a></td>  
        </tr>      
  <tr>
            <td>Type de stage</td>
            <td>{{ $stage->type }}</td>  
        </tr>
        <tr>
            <td>Date de début de stage</td> 
            
            <td>{{ $stage->date_du}}</td> 
        </tr>
        <tr>
            <td>Date de fin du stage</td>
            <td>{{ $stage->date_au }}</td>  
        </tr>
        <tr>
            <td>Durée de stage</td>
            <td>{{ $stage->duree }}</td>  
        </tr>
        <tr>
            <td>Formation</td>
            <td>{{ $stage->formation }}</td>  
        </tr>
        <tr>
            <td>Etablissement</td>
            <td>{{ $stage->etablissement }}</td>  
        </tr>
        <tr>
            <td>Intitulé du projet</td>
            <td>{{ $stage->intitule_projet }}</td>  
        </tr>
        <tr>
            <td>Description du projet</td>
            <td>{{ $stage->description_projet }}</td>  
        </tr>
        <tr>
            <td>Date de création</td>
            <td>{{ $stage->created_at }}</td>  
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
<form action="{{ route('stages.destroy',$stage->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('stages.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('stages.edit',$stage->id) }}">Modifier</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
</div >
</div >
</div >
</div >
</div >
@endsection