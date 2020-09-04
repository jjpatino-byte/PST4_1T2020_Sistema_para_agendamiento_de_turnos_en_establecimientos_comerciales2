<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>REGISTRO CORRECTO</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
            <div class="p-5">

              <form class="user">
                <div><?php 
                    $currPass=$_POST["currentPass"];
                    $newPass=$_POST["newPass"];
                    $confPass=$_POST["confirm"];
                    $cedula=$_POST["cedula"];
                    //Se inicia la conexión
                    $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                    //Se realiza la consulta para luego confirmar que la contraseña ingresa sea la de la base de datos
                    $sql="select * from `cliente` where cedula='$cedula'";
                    
                    $res= $conn->query($sql);
                    $row=mysqli_fetch_array($res);
                    //Se verifica que la contraseña ingresa sea la de la base de datos y que la confirmaciónde la contraseña sea igual a la nueva contraseña
                        if($newPass==$confPass and $currPass==$row["contraseña"]){
                            echo '<h3>Cambio de contraseña exitoso</h3>';
                            //Si cumple las condiciones, se actualiza la contraseña
                            $actualizar="UPDATE `cliente` SET `contraseña` = '$newPass' WHERE `cliente`.`cedula` = '$cedula'";
                            $conn->query($actualizar);
                            echo '<div class="text-center"><a class="small" href="index.html">cerrar sesion</a></div>';
                            echo '<div class="text-center"><a class="small" href=userhome.php?usuario='.$cedula.'>Ir a tomar un turno</a></div>';
                            }
                            //Caso contrario muestra mensaje de error
                            else{echo 'Las contraseñas no son iguales o no es la contraseña que tiene actualmente';
                            echo '<div class="text-center"><a class="small" href=userpass.php?usuario='.$cedula.'>Intentar nuevamete</a></div>';
                                echo '<div class="text-center"><a class="small" href="index.html">cerrar sesion</a></div>';
                                echo '<div class="text-center"><a class="small" href=userhome.php?usuario='.$cedula.'>Ir a tomar un turno</a></div>';

                            }
                            
                            $conn->close();
                            $res->close();
?>
</div>
              </form>
              <hr>
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