<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Admin | TagsGame</title>
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
    <h1>TagsGame</h1>
    <hr>
    <form action="backend/actualizar.php" method="POST">
      <input type="text" name="question" id="question" placeholder="Pregunta">
      <input type="text" name="answer" id="answer" placeholder="Respuesta">
      <input type="submit" value="Guardar" class="btn btn-dark" onclick="location.reload()">
    </form>
    <div class="row" id="items"></div>
  </div>

  

  <template id="template-card">
    <div class="col-12 mb-2">
      <div class="card">
        <div class="card-body">
          <h5>question</h5>
          <p>Anwser</p>
          <button class="btn btn-danger">Quitar</button>
          <button class="btn btn-success">Editar</button>
        </div>
      </div>
    </div>
  </template>


  <script src="backend/script.js"></script>
</body>
</html>