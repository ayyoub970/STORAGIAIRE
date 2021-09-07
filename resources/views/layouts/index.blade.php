@auth

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STORAGIAIRE | admin</title>
  <style type="text/css">
 
   .has-error
   {
    border-color:#cc0000;
    background-color:black;
   }
  </style>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.0/css/bootstrap4-toggle.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/submit.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search"   role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
      <!-- Notifications Dropdown Menu -->
     
     

      @asyncWidget('alertes')





      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen"   role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('dist/img/storactivelogos.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">STORAGIAIRE</span>
    </a>
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <li class="nav-item dropdown  ">
        
                                <a id="navbarDropdown" class="nav-link dropdown-toggle "   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp&nbsp&nbsp<i class="fa fa-user" style="font-size:15px;color:lime;">&nbsp&nbsp&nbsp&nbsp</i>   {{ Auth::user()->nom }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a   class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
              </p>
            </a>
           
          </li>
      
          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Stagiaires
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('stagiaires.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un stagiaire</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('stagiaires.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des stagiaires</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-business-time"></i>
              <p>
                Stages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('stages.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un stage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('stages.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des stages</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
               Taches
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tache.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une tache</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tache.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des taches</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Absences
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('absences.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une absence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('absences.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des absences</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Historiques
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('activitylogs.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tout l'historique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('activitylogs.mine') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mon historique</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Pièces de stage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('stagepieces.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter des pièces </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('stagepieces.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des pièces</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Rapports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('rapports.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un rapport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rapports.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des rapports</p>
                </a>
              </li>
              
            </ul>
          </li>




          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Annonces
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('annonces.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une annonce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('annonces.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des annonces</p>
                </a>
              </li>
              
            </ul>
          </li>




          <li class="nav-item">
            <a   class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Utilisateurs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/usertype" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un compte</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des utilisateurs</p>
                </a>
              </li>
              
            </ul>
          </li>

        

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
      <a   class="btn btn-link"><i class="fas fa-cogs"></i></a>
    </div>
    <!-- /.sidebar-custom -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <!--<b>Version</b> 3.1.0 -->
    </div>
    <strong>    <a href="https://storactive.ma">Storactive </a> 20{{$date=date("y")}} &copy;</strong> Tous droits réservés.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('js/submit.js') }}"></script>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>




<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.0/js/bootstrap4-toggle.min.js"></script>

<script>
  
  $(document).ready(function(){
  
   $('#nom_utilisateur').blur(function(){
    var nom_utilisateur = $('#nom_utilisateur').val();
    var _token = $('input[name="_token"]').val();
    var filter = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;
    if(!filter.test(nom_utilisateur))
    {    
      $('#nom_utilisateur').css('border-color','red'); 
     $('#nom_utilisateur').addClass('has-error');
     $('#register').attr('disabled', 'disabled');
    }
    else
    {
      $('#nom_utilisateur').css('border-color','green'); 
     $.ajax({
      url:"{{ route('registers.check') }}",
      method:"POST",
      data:{nom_utilisateur:nom_utilisateur, _token:_token},
      success:function(result)
      {
       if(result == 'unique')
       {
        
        $('#register').attr('disabled', false);
       }
       else
       {
        $('#nom_utilisateur').css('border-color','red'); 
        $('#nom_utilisateur').addClass('has-error');
        $('#register').attr('disabled', 'disabled');
       }
      }
     })
    }
   });
   
  });
  </script>
   
<script>
  $(function () {
    $("#example1").DataTable({
      
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      pageLength : 4,
    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": false,
    });
  });
</script>
<script>
    $(function () {
      $('.select2').select2()
    });
</script>



</body>
</html>
@endauth
