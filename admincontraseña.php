<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Menu - Admin</title>

  <!-- Fuentes personalizadas para la página-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Estilos personalizados para la página-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Fila anidada dentro del cuerpo del card body -->
        <div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                
              </div>
              <form class="user">
                <div><?php
               
                    $contrasena= $_POST['contraseña'];//Se obtiene la contraseña enviada por el form de administradorlogin.php
                    $password= "contraseña";
                    $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr"); //Conexión con la base de datos
                   $sql="select * from `admin` where id='admin'"; //Se realiza la consulta a la tabla admin
                   $res= $conn->query($sql);// ejecutamos la consulta
                   $row=mysqli_fetch_array($res);
                    if ($contrasena==$row['contraseña']){//validación para ver si la contraseña es correcta
                       //Si la contraseña es correcta, muestra las opciones para el administrador: Ingresar horarios o ver el resumen de citas para el día actual
                        echo '<h1 class="h4 text-gray-900 mb-4">Bienvenido Admin</h1>';
                        echo '<hr>';
                        echo '<a href="ingresodehorarios.html" class="btn btn-google btn-user btn-block"> Administrar horarios </a>';
                        echo '<a href="resumen.php" class="btn btn-facebook btn-user btn-block"> Resumen de citas agendadas versus citas atentidas </a>';
                    }
                    else{
                        //caso contrario se muestra mensaje de contraseña incorrecta al cliente
                        echo '<h3>Contraseña Incorrecta</h3>';
                        echo'<div class="text-center">
                <a class="small" href="administradorlogin.php">Intentar nuevamente</a>
              </div>';
                    }
                    
                ?></div>
              </form>
              <hr>
              <div class="text-center">
                  <!--Opción para regresar a la página de inicio-->
                <a class="small" href="index.html">Regresar a la página de inicio</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
