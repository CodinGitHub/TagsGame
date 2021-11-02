<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Admin | &lt;TagsGame&gt; </title>
</head>
<body>

  <nav>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li>
        <a class="nav-link active" aria-current="page" href="#">Admin</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <header>
      <h1 class="text-end">&lt;TagsGame&gt;</h1>
    </header>
    <hr>
    <form  action="backend/actualizar.php" method="POST">

      <fieldset>
        <legend>Ingresa la pregunta y posibles respuestas:</legend>
        <div class="mb-3">
          <input class="form-control" type="text" name="question" id="question" placeholder="Pregunta">
        </div>
        <div class="mb-3">
          <input class="form-control" type="text" name="rightAnswer" id="rightAnswer" placeholder="Respuesta correcta">
        </div>
        <div class="mb-3">
          <input class="form-control" type="text" name="wrongAnswer1" id="wrongAnswer1" placeholder="Respuesta incorrecta">
        </div>
        <div class="mb-3">
          <input class="form-control" type="text" name="wrongAnswer2" id="wrongAnswer2" placeholder="Respuesta incorrecta">
        </div>
        <div class="mb-3">
          <input class="form-control" type="text" name="wrongAnswer3" id="wrongAnswer3" placeholder="Respuesta incorrecta">
        </div>
        
        
        
        
      </fieldset>
      <div class="text-end">
          <input type="submit" value="Guardar" class="btn btn-dark text-end" onclick="location.reload()">
        </div>
    </form>
    <br>
    <div class="row" id="items"></div>
  </div>

  

  <template id="template-card">
    <div class="col-12 mb-2">
      <div class="card">
        <div class="card-body">

          <h5 id="jsonId">1</h5>
          <h5 id="question">Question</h5>
          <p id="rightAnswer">rightAnwser</p>
          <p id="wrongAnswer1">wrongAnwser1</p>
          <p id="wrongAnswer2">wrongAnwser2</p>
          <p id="wrongAnswer3">wrongAnwser3</p>

          <div class="text-end">
            <button class="btn btn-danger">Quitar</button>
            <button class="btn btn-success">Editar</button>
          </div>
          
        </div>
      </div>
    </div>
  </template>


  <script src="backend/script.js"></script>
</body>
</html>