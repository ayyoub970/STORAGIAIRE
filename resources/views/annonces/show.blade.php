@extends('layouts.index')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <p>AnnonceId  :  {{ $annonce->id}}</p></div>

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
            <td>Annonceur</td>
            <td><a href="{{route('users.show',$annonce->user_id)}}">{{ $xxx[0]->nom }}</a></td>  
        </tr>
        
        <tr>
            <td>Contenu </td>
            <td>{!! nl2br(e($annonce->annonce )) !!}</td>  
        </tr>
        <tr>
            <td>Créée le</td> 
            
            <td>{{ $annonce->created_at}}</td> 
        </tr>
        <tr>
            <td>Pour</td> 
            @if($annonce->type === 'tt') <td>tous les stages</td> 
            @else <td>{{ $annonce->type}}</td> @endif
        </tr>
       
        <tr>
            <td>Status</td> 
            
            @if($annonce->etat)  <td>activé</td> @else <td>desactivé</td> @endif
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
<form action="{{ route('annonces.destroy',$annonce->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('annonces.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('annonces.edit',$annonce->id) }}">Modifier</a>

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
