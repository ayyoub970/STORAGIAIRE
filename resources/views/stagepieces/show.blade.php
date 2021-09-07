@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <h3>Informations de  : {{ $stage->nom }}</h3></div>

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
            <td>CIN</td>
            <td>{{ $stage->cin }}</td>  
        </tr>
        <tr>
            <td>Sexe</td>
            <td>{{ $stage->sexe }}</td>  
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $stage->email }}</td>  
        </tr>
        <tr>
            <td>Adresse</td>
            <td>{{ $stage->adresse }}</td>  
        </tr>
        <tr>
            <td>Nomutilisateur</td>
            <td>{{ $stage->nom_utilisateur }}</td>  
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

   <a class="btn btn-primary" href="{{ route('stages.edit',$stage->id) }}">Edit</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div >
</div >
</div >
</div >
</div >
@endsection