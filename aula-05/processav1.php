<?php

  // DC2 2023/1: processamento de dados de formulários
  // copiem este arquivo para a pasta de destino e 
  // definam "processa.php" como atributo action de form

  // exibe dados post
  if (isset($_POST['form_post'])) {
    
    printf('<h1>dados post</h1>');
    
    // laço sobre vetor
    foreach($_POST as $nome => $valor) {

      if ($nome == 'disciplinas') {
        printf("%s: %s<br>",$nome, implode(', ', $_POST['disciplinas']));
      }
      else {
        printf("%s: %s<br>",$nome,$valor);
      }
    }
  }

  // else {

    // exibe dados get
    
    // printf('<h1>dados get</h1>');
    // laço sobre vetor
    // foreach($_GET as $nome => $valor) {
    //   printf("%s: %s<br>",$nome,$valor);
    // }
    
  // }

?>