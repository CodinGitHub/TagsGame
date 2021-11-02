  <?php 
    $jsonFile = fopen("data.json", "a+");
    $mensaje = ftell($jsonFile);
    $información = fgets($jsonFile, 12);
    fputs($jsonFile, "linea1\n");
    fputs($jsonFile, "linea2\n");
    fputs($jsonFile, "linea3\n");
    fclose($jsonFile);

    header("location:index.php?msg=$mensaje")
  ?>

  