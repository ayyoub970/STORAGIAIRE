<div class="card">
             
             <!-- /.card-header -->
             <div class="card-body" id="autodata">
             @if (session('status'))
                       <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                       </div>
                   @endif
                   @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                  <p>{{ $message }}</p>
                  </div>
                  @endif
           <!-- Map card /.card -->
           @foreach ($annonces as $annonce)
           <div class="card card-widget">
               <div class="card-header">
                   <div class="user-block">
                           <img class="img-circle" src="{{ asset('dist/img/storactivelogos.png') }}" alt="User Image">
                           <span class="username"><a href="">{{ $annonce->nom }}</a></span>
                           <span class="description ">{{ $annonce->created_at }}</span>
                   </div>
               <!-- /.user-block -->
        
               <!-- /.card-tools -->
                 </div>
             <!-- /.card-header -->
                 <div class="card-body  text-justify">
               <!-- post text -->
                     <p>{!! nl2br(e($annonce->annonce )) !!}</p>

                </div>
             <!-- /.card-body -->
             
             <!-- /.card-footer -->
            
             <!-- /.card-footer -->
           </div>
           @endforeach
           <!-- solid sales graph -->
           </div>
             <!-- /.card-body -->
           
           </div>