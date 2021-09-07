 <!-- Messages Dropdown Menu -->
 <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        <?php $wordCount = count($secret)?>  
        @if($wordCount >0)
        <span class="badge badge-danger navbar-badge">{{$wordCount = count($secret)}} </span>@endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        @foreach ($secret as $x)    
  <?php 
        $fdate=$x->updated_at;
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
          <a href="{{ route('alertes.show',$x->id) }}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
               <div class="media-body">
                
                <p class="text-center">{{$x->contenu}}</p>
                <p class="text-sm text-center text-muted"><i class="far fa-clock mr-1"></i> {{$dada}}</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
          @endforeach       
        
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{Route('alertes.index')}}" class="dropdown-item dropdown-footer">Voir toutes les Alertes</a>
          <div class="dropdown-divider"></div>
          <a href="{{Route('alertes.create')}}" class="dropdown-item dropdown-footer">Ajouter une Alerte</a>
        </div>
      </li>

























