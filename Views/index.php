<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conta-notas</title>
  <link rel="stylesheet" href="Assets/Css/style.css">
</head>

<body>
  <div class="container">
    <div class="enunciado-container">
      <h2>Conta-notas</h2>
      
    </div>
    <div class="form-container">
      
      <form class="form" action="" method="POST">
        <p>Insira um valor para saber a quantidade mínima de notas necessárias</p>
        <input name="valor" type="number" step="0.01" id="valor" required>
        <button type="submit" class="calcular">Calcular</button>
      </form>
      <div class="resultado-container hidden slide" id="resultado-label">
        <div id="resultado"></div>
      </div>
      
    </div>

  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="Assets/Js/script.js"></script>
</body>

</html>