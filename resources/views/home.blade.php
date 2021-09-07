@extends('layouts.index')

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
        @asyncWidget('nouvellesabsences')
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @asyncWidget('donetasks')
            
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @asyncWidget('latetasks')
          
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @asyncWidget('nvstages')
          
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
        @asyncWidget('stagestart')
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @asyncWidget('stagesend')
            
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @asyncWidget('stagenop')
          
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @asyncWidget('rapportstage')
          
          </div>
          <!-- ./col -->
        </div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
          
            <!-- /.card -->

            

            <!-- TO DO List -->
            
            @asyncWidget('taches')
            <!-- /.card -->
            @asyncWidget('absencescauses')
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card 
       
            /.card -->
            @asyncWidget('historiques')
            <!-- solid sales graph -->
            @asyncWidget('annonces')
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
