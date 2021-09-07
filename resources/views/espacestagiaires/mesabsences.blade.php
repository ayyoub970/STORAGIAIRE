
@extends('layouts.index1')
 
 @section('content')
 <div class="card">
               <div class="card-header">
                 <h3 class="card-title">Mes absences</h3>
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
                  
                   <th style="width:00px";>AbsenceId</th>
                   <th>Cause</th>
                   <th style="width:70px";>Début</th>
                   <th style="width:70px";>Fin</th>
                     <th style="width:00px";>Durée</th>
                     
                    
                     
                   </tr>
                   </thead>
                   <tbody>
                   @foreach ($absences as $absence)
                  
                   <tr>
                   <td ><a href="{{route('espacestagiaires.voirabsence',$absence->id)}}">{{ $absence->id }}</a></td>
                   <td>{{ $absence->cause }}</td>
                   <td>{{ $absence->date_du }}</td>
                   <td >{{ $absence->date_au }}</td>
                   <td style="color:red";>{{ $absence->nombrejours }} jours</td>
             
             
         </tr>
         @endforeach
                   
                   
                   </tbody>
                   <tfoot>
                   <tr>
                   <th>AbsenceId</th>
                   <th>Cause</th>
                   <th>Début</th>
                   <th>Fin</th>
                     <th>Durée</th>
                     
                    
                     
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
                 <div color="" class="card-header">Liste des absences </div>
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