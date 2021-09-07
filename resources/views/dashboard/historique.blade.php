<div class="card">
              <div class="card-header">
                <h3 class="card-title">Historique</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
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
                      <td><a href="{{Route('activitylogs.show',$item->id)}}";>{{ $item->nom }} 
                      a <?php if ($item->description=='created'){echo'ajouté';} elseif($item->description=='updated'){echo'modifié';}else{echo"supprimé";}?>
                      <?php   if($item->subject_type=="App\Models\Tache"){echo" une tache";}
                               if($item->subject_type=="App\Models\Stage"){echo" un stage";}
                               if($item->subject_type=="App\Models\Absence"){echo" une absence";}
                               if($item->subject_type=="App\Models\Stagepieces"){echo" pieces de stage";}
                               if($item->subject_type=="App\Models\Stagiaire"){echo" un stagiaire";}?>
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