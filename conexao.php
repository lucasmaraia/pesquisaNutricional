<?php 

$host = getenv("DB_HOST") ?: "localhost";
$usuario = getenv("DB_USER") ?: "root";
$senha = getenv("DB_PASSWORD") ?: "";
$bd = getenv("DB_NAME") ?: "pesquisa_nutricional";

$mysqli = new mysqli($host,$usuario,$senha,$bd);



?>
<!doctype html>
<html>
   <meta>
   <link rel="stylesheet" href ="estilo.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <meta>
   <body>
   <br>
  <center><center> <h1>Dados registrados com sucesso.</h1> </center>
  <center>      <h2>Obrigado pela sua contribuição</h2> </center>
  <br>

  <center> <a href="index.php"><button href="/formulario/index.php" type="submit" class="btn btn-primary">Voltar</button></a> </center>
    




  
   
  
   </body>
</html>
