  <?php 
    //GET. Información se envía de forma visible
    //POST. Información se envía de forma no visible

    $jsonID = 0;
    $question = $_POST["question"];
    $rightAnswer = $_POST["rightAnswer"];
    $wrongAnswer1 = $_POST["wrongAnswer1"];
    $wrongAnswer2 = $_POST["wrongAnswer2"];
    $wrongAnswer3 = $_POST["wrongAnswer3"];
    
    $jsonValues = array(
      "id" => $jsonID,
      "question" => $question, 
      "rightAnswer" => $rightAnswer,
      "wrongAnswer1" => $wrongAnswer1,
      "wrongAnswer2" => $wrongAnswer2,
      "wrongAnswer3" => $wrongAnswer3
    );

    if(file_exists("data.json")){
      //Convierto el JSON en un string
      $jsonToString = file_get_contents("data.json");

      //Convierto lo anterior a una variable de PHP
      $dataArray = json_decode($jsonToString);

      array_push($dataArray, $jsonValues);
       
      //json_encode — Retorna la representación JSON del valor dado
      //file_put_contents — Escribir datos en un fichero
      file_put_contents("data.json", json_encode(($dataArray)));
    }else{
      //creo un arreglo vacio
      $dataArray = array();
      array_push($dataArray, $jsonValues);
      //Creo el archivo si no existe
      $f = fopen("data.json", "w");
      fwrite($f, json_encode($dataArray));
      fclose($f);
    }
    //Enviar encabezado sin formato HTTP
    header("Location: ../admin.php")
  ?>

  