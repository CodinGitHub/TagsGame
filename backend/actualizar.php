  <?php 
    $jsonID = 0;
    $question = $_POST["question"];
    $rightAnswer = $_POST["rightAnswer"];
    $wrongAnswer1 = $_POST["wrongAnswer1"];
    $wrongAnswer2 = $_POST["wrongAnswer2"];
    $wrongAnswer3 = $_POST["wrongAnswer3"];
    
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

  