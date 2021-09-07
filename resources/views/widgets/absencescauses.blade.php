<div class="card">
              <div class="card-header">
                <h3 class="card-title"><a style="color:black" href="{{route('absences.index')}}"><b>Absences</b></a></h3>
        
               
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table" id="">
                 
                  <tbody>
                  @foreach ($secret as $item)
                
                    <tr>
                      <td>
                     {{$item->nom}} va s'absenter pendant {{$item->nombrejours}} jour pour la raison :<br> 
                     {{$item->cause}}
                     </td>
                      </tr>
                
                        @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>