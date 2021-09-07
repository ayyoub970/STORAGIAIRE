@extends('layouts.index1')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">






      
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->



         @include('espacestagiaires.widgets.donetasks')
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             
            @include('espacestagiaires.widgets.notdonetasks')  
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             
            @include('espacestagiaires.widgets.taskstodo')  
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @include('espacestagiaires.widgets.absences')    
          
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
          
            <!-- /.card -->

            

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Taches</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" id="autodata">
            @include('espacestagiaires.widgets.tachestest')
            </div>
              <!-- /.card-body -->
           
            </div>
             
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
          

      
         @if($kawlamaka->count() > 0)
          
         <div class="card" id="autodata">
              <div class="card-header">
                <h3 class="card-title">Annonces</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
            <!-- Map card /.card -->
            
        @include('espacestagiaires.widgets.annonces')

            <!-- solid sales graph -->
            </div>
              <!-- /.card-body -->
            
            </div>
            @endif
            <!-- /.card -->

            <!-- Calendar -->
       
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- / ancien zbbbbbbbbbbbb

            <div class="card">
                <div color="" class="card-header">{{ __('Stagiaires') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in in! <br>You are logged in baby! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br>You are logged in! <br> ') }}
                </div>
            </div>

-->

@endsection
