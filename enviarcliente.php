<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>registro - exitoso</title>

  <!-- Fuente personalizada para la página-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- estilos personalizados para la página-->
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
                //Obtener datos del archivo ingreoclientes.html
                    $nombre=$_POST['nombre'];
                    $apellido= $_POST['apellido'];
                    $cedula= $_POST['cedula'];
                    $contrasena= $_POST['contraseña'];
                    $correo= $_POST['correo'];
                    
                    //Conexión con la base de datos
                    $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                    //Consulta para postriormente verificar si el usuario ya existe
                    $sql="select * from `cliente` where cedula='$cedula'";
                    
                    $res= $conn->query($sql);//Ejecución de la consulta
                    //Número de filas de la consulta
                    $rows= $res->num_rows;
                    
                    //Si se ingresaron datos y el número de filas de la consulta es 0, quiere decir que el usuario no se ha registrado, por lo cual se lo perit registrar y encrear su perfil
                    if(isset($nombre) && isset($apellido) && isset($cedula) && isset($contrasena) && $rows==0){
                       //Se inserta los datos en la base de datos
                        $query= "INSERT INTO `cliente` (`cedula`, `nombre`, `apellido`, `contraseña`, `correo`) VALUES ('$cedula', '$nombre', '$apellido','$contrasena','$correo')";
                        $conn->query($query);
                      
                        
                        echo '<div class="text-center"><h1 class="h4 text-gray-900 mb-4">Se registró correctamente</h1></div>';
                      
                        echo '<div class="text-center"><a class="small" href="index.html">Regresar a pagina de inicio</a></div>';
                        echo '<div class="text-center"><a class="small" href="userlogin.html">Ingresar como cliente</a></div>';
                        
                       
                    }
                    else{//Caso contrario se avisa que no se ha creado la cuenta
                        echo '<h3>Usted ya se ha registrado</h3>';
                        echo '<div class="text-center"><a class="small" href="userlogin.html">Ingresar como cliente</a></div>';
                        echo '<div class="text-center"><a class="small" href="index.html">Regresar a pagina de inicio</a></div>';
                        
                    }
                        
                    $conn->close();
                    $res->close();
                ?></div>
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
