<?php
  if(isset($_POST["year"])){
    $datas = array();

    for ($i=0; $i < 5000 ; $i++) {
      array_push($datas, [$i,$i,$i,$i,$i,$_POST["year"]]);
    }
    echo json_encode($datas);

  }
 ?>
