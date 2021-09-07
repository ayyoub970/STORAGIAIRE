<div class="card">
              <div class="card-header">
                <h3 class="card-title">Taches</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Taaa</th>
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
                      
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    @endforeach
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>