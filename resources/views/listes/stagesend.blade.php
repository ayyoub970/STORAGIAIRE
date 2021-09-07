@extends('layouts.index')
 
@section('content')
<div class="">
    <div class="">
       
            <div class="card">
                <div color="" class="card-header">Liste des stages qui se terminent aujourd'hui</div>
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
            <th style="width:00px">Si</th>
            <th>Type</th>
            <th>Nom Stagiaire </th>
            <th>Intitulé de projet</th>
            <th>Durée</th>
            <th style="width:00px">Action</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($xxx as $x)
        <tr>
            <td><a href="{{route('stages.show',$x->id)}}">{{ $x->id }}</a></td>
            <td> <a href="{{route('stagiaires.show',$x->stagiaire_id)}}">{{ $x->stagiaire_id }}</a></td>
            <td>{{ $x->type }}</td>
            <td>{{ $x->nom }}</td>
            
            <td>{{ $x->intitule_projet }}</td>
            <th style="width:00px">{{ $x->duree }}</td>
            <td>
  
            <div class="btn-group dropright">
  <button type="button" class="btn  dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img style="" src="img/action.png" width="20" height="20" >
  </button>
  <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
  <form action="{{ route('stages.destroy',$x->id) }}" method="POST">
   
   <a class="btn dropdown-item" href="{{ route('stages.show',$x->id) }}"><img style="" src="img/show.png" width="20" height="20" >&nbsp;&nbsp;&nbsp;Afficher</a>

   <a class="btn dropdown-item" href="{{ route('stages.edit',$x->id) }}"><img style="" src="img/edit.png" width="20" height="20" >&nbsp;&nbsp;&nbsp;Modifier</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn dropdown-item"><img style="float:center" src="img/delete.png" width="20" height="20" >&nbsp;&nbsp;&nbsp;Supprimer</button>
</form>
  </div>
</div>
          
            </td>
</tr>
        @endforeach
        </tbody>
      
    </table>
    </div >
   
</div>
</div ></div >

    
    
@endsection