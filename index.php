<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/game.css">
  <title>Inicio | &lt;TagsGame&gt;</title>
</head>
<body>
  
  <nav>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
      </li>
      <li>
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <header>
      <h1 class="text-end">&lt;TagsGame&gt;</h1>
    </header>
    <hr>
  </div>

  <div id="game"></div>


  <template id="template-card">
        <div id="question">Pregunta</div>
        <div id="game-container">
          <div id="answer1" class="options">Respuesta 1</div>
          <div id="answer2" class="options">Respuesta 2</div>
          <div id="answer3" class="options">Respuesta 3</div>
          <div id="answer4" class="options">Respuesta 4</div>
        </div>
  </template>



  <script src="backend/showGame.js"></script>
</body>
</html>