<div class="small-box bg-danger">
              <div class="inner">
              <?php $wordCount = count($secret)?> 
              <h3>{{$wordCount}}</h3>

                <p>Alertes</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{Route('alertes.index')}}" class="small-box-footer">Plus d'info <i class="fas fa-arrow-circle-right"></i></a>
            </div>