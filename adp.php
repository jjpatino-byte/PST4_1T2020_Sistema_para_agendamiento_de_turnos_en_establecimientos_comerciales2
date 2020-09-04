<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INICIO</title>

  <!-- Fuentes personalizadas para la página-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Estilos personalizados para la página-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PST GRUPO<sup>4</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>

      <!-- Opción para resumen de citas -->
      <li class="nav-item">
        <a class="nav-link" href="resumen.php">
          <i class="fas fa-user"></i>
          <span>Resumen de citas</span>
        </a>
      </li>

      <!-- Opción para ingreso de horarios -->
      <li class="nav-item">
        <a class="nav-link" href="ingresodehorarios.html">
          <i class="fas fa-book"></i>
          <span>Ingreso de Horarios</span></a>
      </li>

      <!--Opción para cerrar sesión -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-users"></i>
          <span>Cerrar Sesión</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          <div class="text-center">
              <?php
              
              echo '<br><h3>Cambio de Contraseña </h3><br>';
              //Envía el formulario al archivo cambioconfadmin.php para cambiar la contraseña
             echo '<form method="post" action="cambioconfadmin.php">';
                       
                       //Pide contraseña actual, nueva contraseña y confirmar la nueva contraseña
                       echo '&nbspContraseña Actual: <input type="password" name="currentPass" required><br><br>';
                       echo 'Nueva contraseña: <input type="password" name="newPass" required><br><br>';
                       echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspConfirme la contraseña: <input type="password" name="confirm" required><br><br>';
                       echo '<input type="submit" class="btn btn-google btn-user" value="Cambiar contraseña">';
                       echo '<br><br>';
                        
                       
                      echo '</form>';
                     ?>
          </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>INTEGRANTES: Jose patiño; Julian Echaiz; Andres Suarez; Michael Quezada</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>