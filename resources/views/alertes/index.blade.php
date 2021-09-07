@extends('layouts.index')
 
@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des alertes</h3>
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
                          <th style="width:00px">AlerteId</th>
                          <th style="width:00px">StageId</th>
                          <th>contenu</th>
                          <th style="width: 120px">date de création</th>
                          <th>status</th>
                          <th style="width:00px">Action</th>
                        </tr>
                  </thead>
                  <tbody>
                          @foreach ($alertes as $alerte)
                        <tr>
                          <td>{{ $alerte->id }}</td>
                          <td><a href="{{route('stages.show',$alerte->stage_id)}}">{{ $alerte->stage_id }}</td>
                          <td>{{ $alerte->contenu }}</td>
                          <td >{{ $alerte->date_creation }}</td>
                           @if($alerte->status)  <th style="width:00px">activé</td> @else <th style="width:00px">desactivé</td> @endif
            
          
                          <td>
  
            <div class="btn-group dropright">
  <button type="button" class="btn  dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img style="" src="{{asset('img/action.png')}}" width="20" height="20" >
  </button>
  <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
  <form action="{{ route('alertes.destroy',  $alerte->id) }}" method="POST">
   
   <a class="btn dropdown-item" href="{{ route('alertes.show', $alerte->id) }}"><img style="" src="{{asset('img/show.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Afficher</a>

   <a class="btn dropdown-item" href="{{ route('alertes.edit', $alerte->id) }}"><img style="" src="{{asset('img/edit.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Modifier</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn dropdown-item"><img style="float:center" src="{{asset('img/delete.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Supprimer</button>
</form>
  </div>
</div>
          
                           </td>
                          </tr>
        @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>AlerteId</th>
                  <th>StageId</th>
                  <th>contenu</th>
                    <th>date de création</th>
                    <th>status</th>
                   
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>




<!--

<div class="container">
    <div class="row justify-content-center">
       
            <div class="card">
                <div color="" class="card-header">Liste des alertes </div>
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