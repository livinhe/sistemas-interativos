<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Formulário - Post Respostas</title>
</head>
<body class="conteiner bg-primary-subtle">
  <main class="container m-auto p-4">
    <?php
      if (isset($_POST['form_post'])) {
    
      printf('<h1 class="text-center text-dark fs-4 font-monospace mb-4">Dados - Formulário</h1>');
    ?>
  <ul class="list-group col-9 p-4 rounded bg-body m-auto">
  <?php
          foreach ($_POST as $nome => $valor) {
            $nome_limpo = ucwords(preg_replace("/[^a-zA-Z]+/", " ", $nome));
            $label_name = "<li class='list-group-item'><strong>{$nome_limpo}:</strong>";
            
            if ($nome == 'disciplinas') {
              printf("{$label_name} %s</li class='list-group-item'>", implode(', ', $_POST['disciplinas']));
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
</body>