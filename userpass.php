<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cambio de contraseña</title>

  <!-- Fuentes para esta página-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Estilos para la página-->
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
        <div class="sidebar-brand-text mx-3">Cambio de Contraseña</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>

      

      <!-- Opción para cerrar sesións -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-users"></i>
          <span>Cerrar sesión</span></a>
      </li>
      <!-- Opción para ir a elgir un turno -->
      <li class="nav-item">
         <?php
         $id=$_GET['usuario'];
        echo '<a class="nav-link" href="userhome.php?usuario='.$id.'">'
        ?>
          <i class="fas fa-users"></i>
          <span>Ir a elegir un turno</span></a>
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
            
                   //Obtine la cédula del cliente
                  $cedula=$_GET['usuario'];
                  //Conexión para obtener el nombre
                   $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                   $sql="select * from `cliente` where cedula='$cedula'";
                   $res= $conn->query($sql);//Ejecutar conexión
                   $row=mysqli_fetch_array($res);
                   echo '<br><br><h1 class="h4 text-gray-900 mb-4">Cambio de contraseña </h1>';
                   echo '<h1 class="h4 text-gray-900 mb-4">'.$row["nombre"].'</h1>';
                   //Formulario para el cambio de contraseña, se lo envía al archivo cambioconf.php
                       echo '<form method="post" action="cambioconf.php?usuario='.$cedula.'">';
                       
                       echo '<input type="hidden" name="cedula" value='.$cedula.'>';
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