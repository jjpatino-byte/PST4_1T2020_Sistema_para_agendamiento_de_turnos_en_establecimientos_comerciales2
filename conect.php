<?php 
    $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
    date_default_timezone_set('America/Guayaquil');
    $fechaActual = date('Y-m-d');
    $horaActual= date('H:i:s');
    $horario="select * from `Horario`";
    $hdisp=$conn->query($horario);
        echo "value=".$horaActual;
    while($row1=mysqli_fetch_array($hdisp)){
        $date=$row1['ft_fin'];
        $newdate=strtotime('-30 minute',strtotime($date));
        $newdate=date ( 'Y-m-j H:i:s' , $newdate );
        //echo substr($newdate,11,5).'<br>';
        
        if($fechaActual==substr($row1['ft_fin'],0,10) and substr($horaActual,0,5)==substr($newdate,10,5)){
        
        echo substr($newdate,10);
        echo '<br>'.substr($horaActual,0,5).' '.substr($newdate,10,5);
        }
    }
    echo ";";
?>