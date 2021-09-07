@extends('layouts.index')
 
@section('content')
<br>

<div class="col d-flex justify-content-center">

                   <section class="col-lg-8 connectedSortable">
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
                    <a href="{{route('annonces.show',$annonce->id)}}"> <img class="img-circle" src="{{ asset('dist/img/storactivelogos.png') }}" alt="User Image"></a>
                            <span class="username">{{ $annonce->nom }}</span>
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
            <!-- /.card -->

            <!-- Calendar -->
       
            <!-- /.card -->
          </section>


                      




<!--

<div class="container">
    <div class="row justify-content-center">
       
            <div class="card">
                <div color="" class="card-header">Liste des annonces </div>
            <div class="card-body">
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

   
                   <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>CIN</th>
           
            <th>Teléphone</th>
            <th>Email</th>
            <th>Nom d'utilisateur</th>
            
            <th width="280px">Action</th>
        </tr>
      
       
    </table>
    </div >
   -->
</div>
</div > 

  
    
@endsection