@extends('layouts.index')
@if($activities[0]->description == 'updated')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
                <div color="" class="card-header">
   
  
  
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
                
                <h3>Modifications  :</h3></div>
                

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
            <td>     </td>
            
            <td>Avant</td>
            
            <td>Après</td>  
            
        </tr>
        @foreach($activities as $activity)
        
        @foreach($activity->properties['attributes'] as $key => $val)
        
        <tr>
             <td>  {{"$key"}}    </td>
             
            <td>{{ $activity->properties['old'][$key] }}</td> 
            
            <td>{{ $activity->properties['attributes'][$key]}}</td> 
        </tr>
        @endforeach
        
        
    
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
<form action="{{Route('activitylogs.destroy',$activity->id)}}" method="POST">
   
   <a class="btn btn-info" href="">Retour</a>

  

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Supprimer</button>
   @endforeach
</form>
</div >
</div >
</div >
</div >
</div >
@endsection
@elseif($activities[0]->description == 'created')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
                <div color="" class="card-header">
   
  
  
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
                
                <h3>Création d'<?php   if( $activities[0]->subject_type=="App\Models\Tache"){echo" une tache";}
                               if( $activities[0]->subject_type=="App\Models\Stage"){echo" un stage";}
                               if( $activities[0]->subject_type=="App\Models\Absence"){echo" une absence";}
                               if( $activities[0]->subject_type=="App\Models\Stagepieces"){echo" pieces de stage";}
                               if( $activities[0]->subject_type=="App\Models\Stagiaire"){echo" un stagiaire";}
                               if( $activities[0]->subject_type=="App\Models\Alerte"){echo" une alerte";}
                               if($activities[0]->subject_type=="App\Models\Rapport"){echo" un rapport";}
                               if($activities[0]->subject_type=="App\Models\Annonce"){echo" une annonce";}
                               ?></h3></div>
                

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
            <td>     </td>
            
            <td></td>
            
             
            
        </tr>
        @foreach($activities as $activity)
        
        @foreach($activity->properties['attributes'] as $key => $val)
        
     @if($key == 'id' )  
            @if($activities[0]->subject_type=="App\Models\Tache")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('tache.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Stage")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('stages.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Alerte")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('alertes.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Stagiaire")
                     <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('stagiaires.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Absence")
            <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('absences.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Stagepieces")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('stagepieces.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Rapport")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td>{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Annonce")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('annonces.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @endif
        @elseif($key == 'status' ) 
        <tr>  
        <td>  {{"$key"}}    </td>
             @if($activity->properties['attributes'][$key] == 1)
            <td>activé</td> 
            @elseif($activity->properties['attributes'][$key] == 0) <td>desactivé</td> @endif
        </tr>
        @else
        <tr>  
        <td>  {{"$key"}}    </td>
             
            <td>{{($activity->properties['attributes'][$key])}}</td> 
           
        </tr>
        @endif

        @endforeach
        
        
    
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
<form action="{{Route('activitylogs.destroy',$activity->id)}}" method="POST">
   
   <a class="btn btn-info" href="">Retour</a>

  

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Supprimer</button>
   @endforeach
</form>
</div >
</div >
</div >
</div >
</div >
@endsection
@else
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
                <div color="" class="card-header">
   
  
  
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
                
                <h3>Supression d'<?php   if( $activities[0]->subject_type=="App\Models\Tache"){echo" une tache";}
                               if( $activities[0]->subject_type=="App\Models\Stage"){echo" un stage";}
                               if( $activities[0]->subject_type=="App\Models\Absence"){echo" une absence";}
                               if( $activities[0]->subject_type=="App\Models\Stagepieces"){echo" pieces de stage";}
                               if( $activities[0]->subject_type=="App\Models\Stagiaire"){echo" un stagiaire";}
                               if( $activities[0]->subject_type=="App\Models\Alerte"){echo" une alerte";}
                               if( $activities[0]->subject_type=="App\Models\Rapport"){echo" un rapport";}
                               if( $activities[0]->subject_type=="App\Models\Annonce"){echo" une annonce";}
                               
                               ?></h3></div>
                

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
            <td>     </td>
            
            <td></td>
            
             
            
        </tr>
        @foreach($activities as $activity)
        
        @foreach($activity->properties['attributes'] as $key => $val)
        
     @if($key == 'id' )  
            @if($activities[0]->subject_type=="App\Models\Tache")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('tache.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Stage")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('stages.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Alerte")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('alertes.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Stagiaire")
                     <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('stagiaires.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Absence")
            <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('absences.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Stagepieces")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('stagepieces.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Rapport")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td>{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            @elseif($activities[0]->subject_type=="App\Models\Annonce")
                    <tr>  
                        <td>  {{"$key"}}    </td>
                        <td><a href="{{route('annonces.show',$activity->properties['attributes'][$key])}}">{{ $activity->properties['attributes'][$key]}}</a></td> 
                    </tr>
            
            @endif
        @elseif($key == 'status' ) 
        <tr>  
        <td>  {{"$key"}}    </td>
             @if($activity->properties['attributes'][$key] == 1)
            <td>activé</td> 
            @elseif($activity->properties['attributes'][$key] == 0) <td>desactivé</td> @endif
        </tr>
        @else
        <tr>  
        <td>  {{"$key"}}    </td>
             
            <td>{{($activity->properties['attributes'][$key])}}</td> 
           
        </tr>
        @endif

        @endforeach
        
        
    
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
<form action="{{Route('activitylogs.destroy',$activity->id)}}" method="POST">
   
   <a class="btn btn-info" href="">Retour</a>

  

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Supprimer</button>
   @endforeach
</form>
</div >
</div >
</div >
</div >
</div >
@endsection
@endif



           