<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User - Menu</title>

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
        <!-- Filas anidadas dentro del Card Body -->
        <div class="row">
            <div class="col-lg-7">
             <div class="p-5">

              <form class="user">
                <div><?php
                    //Se obtiene la cédula y la contraseña del userlogin.html
                    $cedula= $_POST['cedula'];
                    $contrasena= $_POST['contraseña'];
                    //Se inicia la conexión con la base de datos
                    $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                    
                    //Se obtiene el registro de la base de datos para la cédula ingresada por el usuario y el número de filas
                    $sql="select * from `cliente` where cedula='$cedula'";
                    $res= $conn->query($sql);
                    $row=mysqli_fetch_array($res);
                    $rows= $res->num_rows;
                    
                    //Se comprueba que exista tal usuario y que la contraseña sea igual a la registrada en la base de datos
                    if($row["contraseña"]==$contrasena and $rows!=0){
                      
                        
                        echo '<h3>Ingreso correcto</h3>';
                      //Se envía a la página Home del usuario su cédula, si elife la opción ir a escoger horarios
                        echo '<a href="userhome.php?usuario='.$cedula.'" class="btn btn-primary btn-user btn-block">Escoger horario</a>';
                        echo '<hr>';
                        //Opción para cerrar sesión
                        echo '<div class="text-center"><a class="small" href="index.html">Cerrar Sesion</a></div>';
                    }
                    else{
                        //Si no cumple la condición, se muestra el mensaje 
                        echo '<h3>Contraseña o cédula incorrecto o no se ha registrado</h3>';
                        echo '<a class="small" href="index.html" align="center">Ir a la página de inicio</a><br><br>';
                        echo '<a class="small" href="ingreodeclientes.html">Regístrate</a>';
                    }
                 
                ?></div>
              </form>
              <hr>
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
