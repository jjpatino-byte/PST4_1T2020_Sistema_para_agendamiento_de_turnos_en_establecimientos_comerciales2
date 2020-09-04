<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contraseña - Admin</title>

  <!-- Fuentes para la página personalizada-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Estilos personalizados para la página-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Columna anidada dentro del Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
              <img src="admi.jpg" width="500" height="350">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Ingresar constraseña de administrador</h1>
              </div>
              <!-- Formulario de ingreso login administrador, mediante método POST -->
              <form action="admincontraseña.php" method="POST" name="ingresodecliente">
                  
                <div class="form-group">
                    <!-- Contraseña -->
                  <input type="password" class="form-control form-control-user" name="contraseña" placeholder="contraseña" required>
                  
                </div>
                
                <div class="text-center">
                    <!-- Botón de envío -->
                    <input type="submit" nombre="enviar">
                </div>
              </form>
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

