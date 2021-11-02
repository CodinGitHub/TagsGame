  <?php 
    $question = $_POST["question"];
    $answer = $_POST["answer"];
    
    $array = array("question" => $question, "answer" => $answer);

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

  