
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">TcheId</th>
                      <th>Tache</th>
                      <th style="width: 110px">date limite</th>
                      <th style="width: 40px">Progress</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($secret as $tache)
                    <tr>
                      <td>   <a href="{{route('espacestagiaires.voirtache',$tache->id)}}">{{ $tache->id }}</a></td>
                      <td>{{ $tache->tacheafaire }}</td>
                      <td>{{ $tache->date_tache }}</td>
                      
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
            </tr>
                    @endforeach
                 
                  </tbody>
                </table>
              