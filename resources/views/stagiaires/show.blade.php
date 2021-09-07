@extends('layouts.index')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <h3>Informations de  : {{ $stagiaire->nom }}</h3></div>

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
            <td>Stagiaire(id) </td>
            <td>{{ $stagiaire->id }}</td>  
        </tr>
        
        <tr>
            <td>Sexe</td>
            <td>{{ $stagiaire->sexe }}</td>  
        </tr>
        <tr>
            <td>CIN</td>
            <td>{{ $stagiaire->cin }}</td>  
        </tr>
        <tr>
            <td>Telephone</td>
            <td>{{ $stagiaire->tel }}</td>  
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $stagiaire->email }}</td>  
        </tr>
        <tr>
            <td>Adresse</td>
            <td>{{ $stagiaire->adresse }}</td>  
        </tr>
      
        <tr>
            <td>Date de création</td>
            <td>{{ $stagiaire->created_at }}</td>  
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
<form action="{{ route('stagiaires.destroy',$stagiaire->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('stagiaires.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('stagiaires.edit',$stagiaire->id) }}">Modifier</a>

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