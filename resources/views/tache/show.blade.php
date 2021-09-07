@extends('layouts.index')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <h3>Tache de  : </h3></div>

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
            <td>TacheId</td>
            <td>{{ $tache->id }}</td>  
        </tr>
        <tr>
            <td>StageId</td>
            <td><a href="{{route('stages.show',$tache->stage_id)}}">{{ $tache->stage_id }}</a></td>  
        </tr>
  

  <tr>
            <td>tache</td>
            <td>{{ $tache->tacheafaire }}</td>  
        </tr>
        <tr>
            <td>Date de la tache</td> 
            
            <td>{{ $tache->date_tache}}</td> 
        </tr>
        <tr>
            <td>Date de création</td> 
            
            <td>{{ $tache->created_at}}</td> 
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
<form action="{{ route('tache.destroy',$tache->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('tache.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('tache.edit',$tache->id) }}">Modifier</a>

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