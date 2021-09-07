@extends('layouts.index')
 
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Mon historique</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>no</th>
                    <th></th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  @foreach ($data as $item)
                  <?php 
                  
        $fdate=$item->updated_at;
        $tdate=now();
        $adate= new Datetime($fdate);
        $bdate= new Datetime($tdate);
        $xdate=$adate->diff($bdate);
        $days=$xdate->format('%a');
        
        if ($days > 29)  { $days=$xdate->format('%m'); $dada=$days." mois"; }
    elseif ($days < 1 )   {$days=$xdate->format('%h');
      if ($days<1){$days=$xdate->format('%i');$dada=$days." min"; }else{
      $dada=$days." heures"; }}
      else                 { $days=$xdate->format('%a');  $dada=$days." jours"; }
  ?>
                  <tr>
                  <td>{{ $i++ }}</td>
                  <td><a href="{{Route('activitylogs.show',$item->id)}}";>{{ $item->nom }} 
                      a <?php if ($item->description=='created'){echo'ajouté';} elseif($item->description=='updated'){echo'modifié';}else{echo"supprimé";}?>
                      <?php   if($item->subject_type=="App\Models\Tache"){echo" une tache";}
                               if($item->subject_type=="App\Models\Stage"){echo" un stage";}
                               if($item->subject_type=="App\Models\Absence"){echo" une absence";}
                               if($item->subject_type=="App\Models\Stagepieces"){echo"des pieces de stage";}
                               if($item->subject_type=="App\Models\Stagiaire"){echo" un stagiaire";}
                               if($item->subject_type=="App\Models\Rapport"){echo" un rapport";}
                               if($item->subject_type=="App\Models\Annonce"){echo" une annonce";}
                               ?>
                               &nbsp&nbsp
                               <a><span>il y a {{$dada}}</span>
                                </td>
    
                  </tr>
        @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>no</th>
                    <th></th>
                   
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
                <div color="" class="card-header">Liste des stagiaires </div>
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