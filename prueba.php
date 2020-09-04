<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

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
                    date_default_timezone_set('America/Guayaquil');
                $ids= explode(",",$_POST['radioButton']);
                $id_horario= $ids[0];
                $cedula= $ids[1];
                $cupo_disponible= $ids[2];
                $correo= $ids[3];
                
                $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                
                $sql="select * from `detalleturno` where cedula='$cedula' AND id_horario='$id_horario'";
                $res= $conn->query($sql);
                $rows= $res->num_rows;

                 $horario="select * from `Horario` where id_horario='$id_horario'";
                $hdisp=$conn->query($horario);
                $row1=mysqli_fetch_array($hdisp);
                $tiempo_fin=substr($row1["ft_fin"],10);
                $hora_actual=substr(date(date_default_timezone_get('America/Guayaquil')),38,8);
                
                 
                
                echo '<h3>'.$_POST['radioButton'].'</h3>';
                echo '<h3 class="h4 text-gray-900 mb-4">cedula: '.$cedula.'</h3>';
                echo '<h3 class="h4 text-gray-900 mb-4">id horario: '.$id_horario.'</h3>';
                echo '<h3 class="h4 text-gray-900 mb-4">cupos disponibles: '.$cupo_disponible.'</h3>';
                echo '<h3 class="h4 text-gray-900 mb-4">hora limite: '.$tiempo_fin.'</h3>';
                echo '<h3 class="h4 text-gray-900 mb-4">hora actual: '.$hora_actual.'</h3>';
                echo '<h3 class="h4 text-gray-900 mb-4">correo: '.$correo.'</h3>';
                if($cupo_disponible>0 and !($rows>0) and strtotime($tiempo_fin)>strtotime($hora_actual)){
                    mail ( $correo , "Recordatorio cita" , "Recuerde que tiene una cita a en la franja ".substr($row1["ft_inicio"],10)."-".$tiempo_fin );
                    
                $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                $query= "INSERT INTO `detalleturno` (`id`, `cedula`, `id_horario`,`estado`) VALUES (NULL, '$cedula', '$id_horario','no atendido')";
                $incrementar_cita="UPDATE `Horario` SET `num_personas` = `num_personas`+1  WHERE `Horario`.`id_horario` = '$id_horario'";
                $conn->query($query);
                $conn->query($incrementar_cita);
                 echo '<h3 class="h4 text-dark-900 mb-4">Se ha registrado correctamente</h3>';
                }
                else{
                    echo '<h3 class="h4 text-dark-900 mb-4">Ya no existe cupo, ya se encuentra registrado en el horario escogido o el horario escogido ya venció</h3>';
                }
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
