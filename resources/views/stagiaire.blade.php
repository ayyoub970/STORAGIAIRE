@extends('layouts.index1')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
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
         
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             
            
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             
          
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             
          
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
             
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card 
       
            /.card -->
             
            <!-- solid sales graph -->
             
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
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
