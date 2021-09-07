@extends('layouts.index')
@section('content')






<div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des stages sans rapport</h3>
              </div>
              <!-- /.card-header -->
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th style="width:00px">StageId</th>
                  <th style="width:00px">StagiaireId</th>
                  <th>Type</th>
                  <th>Intitulé de projet</th>
                  <th>Durée</th>
                  <th style="width:00px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 <?php  
                 $b=date_format(date_create(now()),'Y-m-d');
                 $xxx = DB::table('stagiaires')
          ->join('stages','stagiaires.id','=','stages.stagiaire_id')
          ->where('date_au','<=',$b)->get();
           ?>  

                 @foreach($xxx as $x)   
                 <?php  $check='storage/files/'.$x->id.'/rapport.pdf'; ?>
                    @if(!file_exists($check))
            <tr>
            <td><a href="{{route('stages.show',$x->id)}}">{{$x->id}}</a></td> 
            <td><a href="{{route('stagiaires.show',$x->stagiaire_id)}}">{{$x->stagiaire_id}}</a></td> 
            <td>{{$x->type}}</td>
            <td >{{ $x->intitule_projet }}</td>
            <td>{{$x->duree}}</td>
                 
        
         <td>
           
            <div class="btn-group dropright">
  <button type="button" class="btn  dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img style="" src="{{asset('img/action.png')}}" width="20" height="20" >
  </button>
  <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
  <form action="{{ route('tache.destroy',  $xxx[0]->id) }}" method="POST">
   
   <a class="btn dropdown-item" href="{{ route('tache.show', $xxx[0]->id) }}"><img style="" src="{{asset('img/show.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Afficher</a>

   <a class="btn dropdown-item" href="{{ route('tache.edit', $xxx[0]->id) }}"><img style="" src="{{asset('img/edit.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Modifier</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn dropdown-item"><img style="float:center" src="{{asset('img/delete.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Supprimer</button>
</form>
  </div>
</div>
          
            </td>
        </tr>
           
           
            @endif
           @endforeach       
                 
     
                  
                  
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>




<!--

<div class="container">
    <div class="row justify-content-center">
       
            <div class="card">
                <div color="" class="card-header">Liste des taches </div>
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
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>CIN</th>
           
            <th>Teléphone</th>
            <th>Email</th>
            <th>Nom d'utilisateur</th>
            
            <th width="280px">Action</th>
        </tr>
      
       
    </table>
    </div >
   
</div>-->
</div > 

  
@endsection
