@extends('layouts.index')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <h3>Informations de  : {{ $user->nom }}</h3></div>

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
            <td>UserId </td>
            <td>{{ $user->id }}</td>  
        </tr>
        
        <tr>
            <td>CIN</td>
            <td>{{ $user->cin }}</td>  
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>  
        </tr>
            @if($user->stagiaire_id === 0)
                <tr>
                    <td>Type</td>
                    <td>Admin</td>  
                </tr>
            @if($user->role === 0)
                <tr>
                    <td>Statut</td>
                    <td>Activé</td>
                </tr>
            @endif 
            @if($user->role < 0)
                <tr>
                    <td>Statut</td>
                    <td>Desactivé</td>
                </tr>
            @endif
            @endif  
     
            @if($user->stagiaire_id > 0)
                <tr>
                    <td>Type</td>
                    <td>Stagiaire</td>  
                </tr>
            @if($user->role === 1)
                <tr>
                    <td>Statut</td>
                    <td>Activé</td>
                </tr>
            @endif 
            @if($user->role < 0)
                <tr>
                    <td>Statut</td>
                    <td>Desactivé</td>
                </tr>
            @endif
            @endif  
      
     
        <tr>
            <td>Date de création</td>
            <td>{{ $user->created_at }}</td>  
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
<form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('users.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

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