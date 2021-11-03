  <?php 
    //GET. Información se envía de forma visible
    //POST. Información se envía de forma no visible

    $jsonID = 0;
    $question = $_GET["question"];
    $rightAnswer = $_GET["rightAnswer"];
    $wrongAnswer1 = $_GET["wrongAnswer1"];
    $wrongAnswer2 = $_GET["wrongAnswer2"];
    $wrongAnswer3 = $_GET["wrongAnswer3"];
    


    $array = array(
      "id" => $jsonID,
      "question" => $question, 
      "rightAnswer" => $rightAnswer,
      "wrongAnswer1" => $wrongAnswer1,
      "wrongAnswer2" => $wrongAnswer2,
      "wrongAnswer3" => $wrongAnswer3
    );

    if(file_exists("data.json")){
      $contenido = file_get_contents("data.json");
      $data = json_decode($contenido);
      array_push($data, $array);
      file_put_contents("data.json", json_encode(($data)));
    }else{
      $data = array();
      array_push($data, $array);
      $f = fopen("data.json", "w");
      fwrite($f, json_encode($data));
      fclose($f);
    }
    header("Location: ../admin.php")
  ?>

  