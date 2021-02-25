<?php 
   ?>
<!doctype html>
<html>
   <meta>
   <link rel="stylesheet" href ="estilo.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <meta>
   <body>
   <br>
  <center> <h2>Pesquisa Nutricional</h2> </center>
   
  <form method = "POST" action ="salva_mensagem.php">
         <div class="form-group">
              <div class="   col-md-6 offset-md-3">
            <label for="exampleInputEmail1"><strong>Você sabe a diferença entre nutrição e alimentação?</strong></label>
            <input type="name" name = "pergunta1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required = 'required'>
          <br>
         </div>
         <div class="form-group">
            <div class="   col-md-6 offset-md-3">
            <label for="exampleInputPassword1"><strong>Quantas vezes você come ao dia?</strong></label>
            <input type="name" name = "pergunta2" class="form-control" id="exampleInputPassword1"  required = 'required'>
         </div>
         <br>
         <div class="form-group">
            <div class="   col-md-6 offset-md-3">
            <label for="exampleInputPassword1"><strong>Quem compra a comida na sua casa?</strong></label>
            <input type="name" name = "pergunta3" class="form-control" id="exampleInputPassword1"  required = 'required'>
         </div>
         <br>
         <div class="form-group">
            <div class="   col-md-6 offset-md-3">
            <label for="exampleInputPassword1"><strong>Você prepara a comida na sua casa?</strong></label>
            <input type="name" name = "pergunta4" class="form-control" id="exampleInputPassword1"  required = 'required'>
         </div>
         <br>
         <div class="form-group">
            <div class="   col-md-6 offset-md-3">
            <label for="exampleInputPassword1"><strong>Quantos litros de água você bebe por dia?</strong></label>
            <input type="name" name = "pergunta5" class="form-control" id="exampleInputPassword1"  required = 'required'>
         </div>
         <br>
         <br>
         <div class="   col-md-6 offset-md-3">
          <center> <button type="submit" class="btn btn-primary" >Enviar</button> </center>
      </form>
   </body>
</html>