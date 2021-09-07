@extends('layouts.index')
 
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th style="width:00px">UserId</th>
                        <th>Nom</th>
                        <th>CIN</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th style="width:00px">Action</th>
                     </tr>
                    </thead>
                    <tbody>
                
                       @foreach ($users as $user)   
                       <tr>       
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->cin }}</td>
                                        <td>{{ $user->email }}</td>
         @if($user->role > 0)   <td>stagiaire</td>   @endif
         @if($user->role === 0) <td>admin</td>   @endif
         @if($user->role < 0) <td>désactivé</td>   @endif
                                        <td>
  
                                <div class="btn-group dropright">
                                    <button type="button" class="btn  dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img style="" src="{{asset('img/action.png')}}" width="20" height="20" >
                                    </button>
                                            <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                     <a class="btn dropdown-item" href="{{ route('users.show',$user->id) }}"><img style="" src="{{asset('img/show.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Afficher</a>
                                                     <a class="btn dropdown-item" href="{{ route('users.edit',$user->id) }}"><img style="" src="{{asset('img/edit.png')}}" width="20" height="20" >&nbsp;&nbsp;&nbsp;Modifier</a>
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
                    <th>Si</th>
                    <th>Nom</th>
                    <th>CIN(s)</th>
                    <th>Téléphone</th>
                    <th>Email</th>
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
                <div color="" class="card-header">Liste des users </div>
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