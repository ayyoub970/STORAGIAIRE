@extends('layouts.index1')
 
@section('content')






<div class="card">
              <div class="card-header">
                <h3 class="card-title">Mes taches</h3>
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
                  <th style="width:0px";>TacheId</th>
                  
                    <th>tache</th>
                    <th style="width:00px";>progress</th>
                    <th style="width:00px";>StageId</th>
                    
                    <th style="width:105px";>date de tache </th>
                   
                   
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($taches as $tache)
                 
                  <tr>
                  <td ><a href="{{route('espacestagiaires.voirtache',$tache->id)}}">{{ $tache->id }}</a></td>
                  
            <td>{{ $tache->tacheafaire }}</td>
            <td style="";>
              @if($tache->progress > 74)
              <span class="badge bg-success">
              @elseif ($tache->progress > 49 && $tache->progress < 75)
              <span class="badge bg-primary">
                @elseif ($tache->progress > 24 && $tache->progress < 50)
                <span class="badge bg-warning">
                  @else
                  <span class="badge bg-danger">
                @endif
                <a href="{{route('espacestagiaires.editprogress',$tache->id)}}"> {{$tache->progress}}%</a></span></td>
            <td>{{ $tache->stage_id }}</td>
            <td>{{ $tache->date_tache }}</td>
            
          
           
        </tr>
        @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Tacheid</th>
                    <th>tache</th>
                    <th>progress</th>
                    <th>StageId</th>
                    <th>date de tache</th>
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