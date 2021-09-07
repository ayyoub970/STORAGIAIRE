<div class="card">
              <div class="card-header">
              <h3 class="card-title"><a style="color:black" href="{{route('activitylogs.index')}}"><b>Historique</b></a></h3>
        
              
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                 
                  <tbody>
                  @foreach ($secret as $item)
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
                      <td><a style="color:#42423D" href="{{Route('activitylogs.show',$item->id)}}";><b>{{ $item->nom }} 
                      a <?php if ($item->description=='created'){echo'ajouté';} elseif($item->description=='updated'){echo'modifié';}else{echo"supprimé";}?>
                      <?php   if($item->subject_type=="App\Models\Tache"){echo" une tache";}
                               if($item->subject_type=="App\Models\Stage"){echo" un stage";}
                               if($item->subject_type=="App\Models\Absence"){echo" une absence";}
                               if($item->subject_type=="App\Models\Stagepieces"){echo"des pieces de stage";}
                               if($item->subject_type=="App\Models\Stagiaire"){echo" un stagiaire";}
                               if($item->subject_type=="App\Models\Alerte"){echo" une alerte";}
                                if($item->subject_type=="App\Models\Rapport"){echo" un rapport";}
                                if($item->subject_type=="App\Models\Annonce"){echo" une annonce";}
                              
                               ?></b>
                               &nbsp&nbsp
                               <a><span>il y a {{$dada}}</span>
                                </td>
                     
                        </tr>
                
                        @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>