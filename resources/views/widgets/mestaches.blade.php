<div class="card">
              <div class="card-header">
                <h3 class="card-title"><a style="color:black" href="{{route('tache.index')}}"><b>Taches</b></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Ti</th>
                      <th>Tache</th>
                      <th style="width: 40px">stage_id</th>
                      <th style="width: 40px">Progress</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($secret as $tache)
                    <tr>
                      <td>{{ $tache->id }}</td>
                      <td>{{ $tache->tacheafaire }}</td>
                      <td>{{ $tache->stage_id }}</td>
                      
                      <td style="";>
              @if($tache->progress > 75)
              <span class="badge bg-success">
              @elseif ($tache->progress > 50 && $tache->progress < 75)
              <span class="badge bg-primary">
                @elseif ($tache->progress > 25 && $tache->progress < 50)
                <span class="badge bg-warning">
                  @else
                  <span class="badge bg-danger">
                @endif
              {{$tache->progress}}%</span></td>
                    </tr>
                    @endforeach
                 
                  </tbody>
                  
                </table>
               
              </div>
              <!-- /.card-body -->
             
            </div>