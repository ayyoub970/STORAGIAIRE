
 @foreach ($alertes as $x)
<span class="dropdown-item dropdown-header">15 Alertes </span>
          <div class="dropdown-divider"></div>
          
          <a href="#" class="dropdown-item">{{$x->id}}
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          
@endforeach   
        
        
        
        
         <!--  <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a> -->
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>