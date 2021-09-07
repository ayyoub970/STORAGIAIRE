@extends('layouts.index')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div color="" class="card-header">
                <p>RapportId  :  {{ $rapport->id}}</p></div>

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
            <td><a href="{{route('stages.show',$rapport->stage_id)}}">{{ $rapport->stage_id }}</a></td>  
        </tr>
        
        <tr>
            <td>Titre</td> 
            <td><a href="/downloadfiles/{{$rapport->stage_id}}">{{ $rapport->titre}}</a></td> 
        </tr>
        
        <tr>
            <td>Encadrant Pédagogique</td> 
            
            <td>{{ $rapport->EncadrantPed}}</td> 
        </tr>
        <tr>
            <td>Encadrant Professionnel</td> 
            <td>{{ $rapport->EncadrantPro}}</td> 
        </tr>
       
       

        <tr>
            <td>Sommaire </td>
            <td>{!! nl2br(e($rapport->Sommaire )) !!}</td>  
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
   
   <a class="btn btn-info" href="{{ route('rapports.index') }}">Retour</a>

   <a class="btn btn-primary" href="{{ route('rapports.edit',$rapport->id) }}">Modifier</a>

  
</form>
</div >
</div >
</div >
</div >
</div >
@endsection
