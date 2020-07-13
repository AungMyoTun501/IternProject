<?php include("pages/tables/auth.php")?>
<?php include("pages/tables/config.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      
    </ul>

  
    
    
    <ul class="navbar-nav ml-auto">
      
       <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/kakashi.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Kakashi</span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="dist/img/kakashi.jpg" class="img-circle" alt="User Image">

                <p>
                Kakashi- Web Developer
                  <small>Member since April. 2000</small>
                </p>
              </li>                                  
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="loginform.php" class="btn btn-dark" style="margin-left: 150px;"><i class="fas fa-sign-out-alt">&nbsp;Log out</i></a>
                </div>
              </li>
            </ul>
          </li>
          
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  
  
  
  

  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    
    <div class="sidebar">
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/kakashi.jpg" style="width:35px; height: 35px;" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kakashi</a>
        </div>
      </div>

      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
              
              <li class="nav-header"></li>

              <li class="nav-item">
                <a href="pages/tables/region.php" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Region Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/place.php" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Place Tables</p>
                </a>
              </li>                                   
             </ul>
          </li>
          
        </ul>
      </nav>
      
    </div>
    
  </aside>
  <div class="content-wrapper">
        <div class="content-header"> 
          <section class="content">       
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card ">
                    <img src="dist/img/beautiful.jpg" style="padding:3px; width: 100%;">
                  </div>
                 
                  </div>
                </div>                
                </div>
              </div>

              <div class="row" style="margin: -25px 9px 0 9px;">
                <div class="col-lg-6">
                  <div class="card ">
                    <img src="dist/img/bagan.jpg" style="padding:3px; width: 100%;">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                      <img src="dist/img/upain.jpg" style="padding:3px; width: 100%;">                    
                  </div>
                  
                </div>
              </div>
            </div>
              
                         
          </section>        
        </div>
  </div>
  

            
  
   <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="loginform.php">Aung Myo Tun</a>.</strong> All rights
    reserved.
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  
</div>



<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
