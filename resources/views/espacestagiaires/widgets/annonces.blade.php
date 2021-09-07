@foreach($annonces as $secret)
<div class="card card-widget">
                <div class="card-header">
                    <div class="user-block">
                            <img class="img-circle" src="{{ asset('dist/img/storactivelogos.png') }}" alt="User Image">
                            <span class="username"><a href="#">{{ $secret->nom }}</a></span>
                            <span class="description">{{ $secret->created_at }}</span>
                    </div>
                <!-- /.user-block -->
         
                <!-- /.card-tools -->
                  </div>
              <!-- /.card-header -->
                  <div class="card-body text-justify">
                <!-- post text -->
                      <p>{!! nl2br(e($secret->annonce )) !!}</p>

                 </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
             
              <!-- /.card-footer -->
            </div>
            @endforeach