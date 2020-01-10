<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    customer
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   
  <!-- CSS Files -->

  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
  <!-- <div class="wrapper "> -->
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
     
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="/customer">
              <i class="now-ui-icons design_palette"></i>
              <p>Menu</p>
            </a>
          </li>
          <!-- <li>
            <a href="/add_pizza">
              <i class="now-ui-icons education_atom"></i>
              <p>Add Pizza</p>
            </a>
          </li> -->
          <li>
            <a href="/orders">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Order List</p>
            </a>
          </li>
          
          <li>
            <a href="/logout_customer">
              <i class="now-ui-icons media-1_button-power"></i>
              <p>Log out</p>
            </a>
          </li>
        </ul>

    </div>
</div>
          <!-- <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Log Out</p>
            </a>
          </li> -->
          <!-- <li>
            <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li> -->
        <!-- </ul>
      </div>
    </div> -->
    <!-- <div class="main-panel" id="main-panel"> -->
      <!-- Navbar -->
      <!-- <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute"> -->
        <!-- <div class="container-fluid"> -->
          <!-- <div class="navbar-wrapper">
           
            <a class="navbar-brand" href="">Table </a>
          </div> -->
        
        <!-- </div> -->
      <!-- </nav> -->
      <!-- End Navbar -->

      <!-- <div class="panel-header panel-header-sm"> -->
      <!-- </div> -->
      <div class="main-panel" id="main-panel"> 
          
          
                
      @yield("content") 
        
      

     
    </div>
  
  <!--   Core JS Files   -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  
    <script src="{{ asset('js/app.js') }}"></script>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="//cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

    @yield("scripts")

</body>

</html>