@extends('layouts.index')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <p>Alerte pour le stage  : <a href="{{route('stages.show',$alerte->stage_id)}}"> {{ $alerte->stage_id}}</a></p></div>

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
            <td>AlerteId</td>
            <td>{{ $alerte->id }}</td>  
        </tr>
        <tr>
            <td>StageId</td> 
            <td><a href="{{route('stages.show',$alerte->stage_id)}}"> {{ $alerte->stage_id}}</a></td> 
           
</tr>
        <tr>
            <td>Contenu de l'alerte</td>
            <td>{{ $alerte->contenu }}</td>  
        </tr>
        <tr>
            <td>Date de création</td> 
            
            <td>{{ $alerte->date_creation}}</td> 
        </tr>
        <tr>
            <td>Stage_id</td> 
            
            <td>{{ $alerte->stage_id}}</td> 
        </tr>
        <tr>
            <td>Status de l'alerte</td> 
            
            @if($alerte->status)  <td>activé</td> @else <td>desactivé</td> @endif
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
<form action="{{ route('alertes.destroy',$alerte->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('alertes.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('alertes.edit',$alerte->id) }}">Modifier</a>

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
