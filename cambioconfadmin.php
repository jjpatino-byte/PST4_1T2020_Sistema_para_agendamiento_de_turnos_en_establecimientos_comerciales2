<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>REGISTRO CORRECTO</title>

  <!-- Fuentes perrsonalizadas para la página-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Estilos perrsonalizadas para la página-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Columna anidada dentro del Card Body -->
            <div class="p-5">

              <form class="user">
                <div><?php 
                //Se obtienen datos del archivo adp.php
            $currPass=$_POST["currentPass"];
            $newPass=$_POST["newPass"];
            $confPass=$_POST["confirm"];

//Conexión con la base de datos
$conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
//Consulta para obtener la contraseña actual del admin
$sql="select * from `admin` where id='admin'";

$res= $conn->query($sql);
$row=mysqli_fetch_array($res);

    if($newPass==$confPass and $currPass==$row["contraseña"]){//Se verifica que la contraseña ingresada haya sido la misma que tiene actualmente y que la nueva contraseña sea igual a la contraseña de confirmación
        
        
        echo '<h3>Cambio de contraseña exitoso</h3>';
        //Se actualiza la nueva contraseña en la tabla del administrador
        $actualizar="UPDATE `admin` SET `contraseña` = '$newPass' WHERE `admin`.`id` = 'admin'";
        $conn->query($actualizar);
        //Opciones para cerrar sesión o ingresar horarios
        echo '<div class="text-center"><a class="small" href="index.html">cerrar sesion</a></div>';
        echo '<div class="text-center"><a class="small" href="ingresodehorarios.html">Registrar horarios</a></div>';
    }
    else{
        //Mensaje de cambio de contraseña fallido
        echo 'Las contraseñas no son iguales o no es la contraseña que tiene actualmente';
    //Opciones para cerrar sesión o ingresar horarios
        echo '<div class="text-center"><a class="small" href="index.html">cerrar sesion</a></div>';
        echo '<div class="text-center"><a class="small" href="ingresodehorarios.html">Ingresar horarios</a></div>';
    }
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
