<?php 
    include_once('conexao.php');
    $pergunta1 = $_POST['pergunta1'];
    $pergunta2 = $_POST['pergunta2'];
    $pergunta3 = $_POST['pergunta3'];
    $pergunta4 = $_POST['pergunta4'];
    $pergunta5 = $_POST['pergunta5'];
    

    $result_msg_contato = "insert into formulario(pergunta1,pergunta2,pergunta3,pergunta4,pergunta5,datacadastro) 
    values('$pergunta1','$pergunta2','$pergunta3','$pergunta4','$pergunta5','now()')";

    $resultado_msg_contato = mysqli_query($mysqli,$result_msg_contato)

   
    ?>

