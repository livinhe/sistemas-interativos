<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Formulário - Post Respostas</title>
</head>

<main class="respostas">
  <?php
  if (isset($_POST['form_post'])) {

    printf('<h1>Dados - Formulário </h1>');
  ?>

    <ul>

      <?php
          foreach ($_POST as $nome => $valor) {
            $nome_limpo = ucwords(preg_replace("/[^a-zA-Z]+/", " ", $nome));
            $label_name = "<li><strong>{$nome_limpo}:</strong>";


            if ($nome == 'disciplinas') {
              printf("{$label_name} %s</li>", implode(', ', $_POST['disciplinas']));
            } else if ($nome == 'form_post') {
              printf('');
            } else if ($nome == 'genero') {
              if($valor == 'none') {
                printf("{$label_name} %s</li>", 'Prefiro não responder');
              } else {
                printf("{$label_name} %s</li>", ucwords($valor));
              }
            } else if ($nome == 'data_nascimento') {
              $data_array = explode('-', $valor); 
              printf("{$label_name} %s/%s/%s</li>", $data_array[2],$data_array[1], $data_array[0]);
            }
            else {
              printf("{$label_name} %s</li>", $valor);
            }
          }
        }
      ?>

    </ul>
</main>

<?php