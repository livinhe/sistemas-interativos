<?php
    // 1) em caso de não haver $_GET/$_POST, usamos os padrões
    $fonte = "Times New Roman";
    $corpo = "12pt";
    $cor_texto = "#000";
    $cor_fundo = "#fff";

    // 2) temos $_GET/$_POST? sim!
    if (isset($_GET['fonte']) &&
        isset($_GET['corpo']) &&
        isset($_GET['cor_texto']) &&
        isset($_GET['cor_fundo']) ) {
      $fonte = $_GET['fonte'];
      $corpo = $_GET['corpo'];
      $cor_texto = $_GET['cor_texto'];
      $cor_fundo = $_GET['cor_fundo'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Testador de CSS </title>
    
    <link rel="stylesheet" href="css/estilos.css">
    
    <style>
        /* modificaremos este CSS */
        body { 
            font-family: "<?php echo $fonte; ?>";
            font-size: <?php echo $corpo; ?>;
            color: <?php echo $cor_texto; ?>;
            background-color: <?php echo $cor_fundo; ?>;
        }
    </style>
    
</head>

<body>
    <nav>
        <form action="index.php" method="get" enctype="application/x-www-form-urlencoded">
        <ul>
            <li>Fonte</li>
            <li><select name="fonte" size="1">
                    <option value="Arial">Arial</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Comic Sans MS">Comic Sans</option>
                    <option value="Tahoma">Tahoma</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Georgia">Georgia</option>
                </select></li>
            <li>
                <input type="radio" name="corpo" value="12pt"> 12pt 
                <input type="radio" name="corpo" value="14pt"> 14pt 
                <input type="radio" name="corpo" value="16pt"> 16pt 
                <input type="radio" name="corpo" value="18pt"> 18pt 
            </li>
            <li>Cor do texto</li>
            <li><input type="color" name="cor_texto"></li>
            <li>Cor do fundo</li>
            <li><input type="color" name="cor_fundo"></li>
            <li><input type="submit" value="Visualizar"></li>
        </ul>
        </form>
    </nav>
    <main>
        <h1>Testador de CSS</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit enim eu urna gravida, vitae sollicitudin lacus aliquam. Proin luctus vitae lectus sed consectetur. Phasellus quis tempor neque. Mauris a commodo sem, a facilisis neque. Nulla dignissim enim a imperdiet mollis. Donec ut accumsan tellus. Praesent eu consequat metus. Sed pulvinar nisi ut nunc dignissim venenatis. Sed auctor magna eget est tincidunt faucibus. Nullam non interdum quam. Aliquam nibh ipsum, volutpat vel metus eu, viverra tempus mi. Etiam semper consequat elit, sed pharetra ipsum vehicula in. Integer tincidunt ligula eget viverra tincidunt.</p>

        <p>Integer semper, ante eget pulvinar pharetra, risus augue finibus mi, et congue ante tortor sit amet turpis. Morbi in vehicula nisi, id condimentum odio. Nam posuere, erat sit amet vehicula finibus, diam metus dignissim lacus, in pharetra tellus dolor ac nulla. Duis vel elementum justo. Nam massa nisi, hendrerit vitae malesuada sed, efficitur vel tellus. Nam sit amet magna nec tellus commodo aliquam. Donec vitae magna a diam eleifend efficitur. Cras mollis gravida nisl, nec pulvinar tellus iaculis imperdiet. Donec ante sapien, convallis in lacus ut, aliquet egestas tortor. Suspendisse et eleifend nulla. Ut tempus erat risus, quis facilisis turpis porttitor a. Morbi vitae sapien tortor. Maecenas laoreet porta dapibus. Maecenas blandit at mauris in posuere.</p>

        <p>Suspendisse nec sapien finibus purus eleifend ornare sit amet sit amet velit. Ut fringilla rhoncus risus sed laoreet. Maecenas blandit metus fermentum libero feugiat placerat. Mauris feugiat risus a tristique gravida. Quisque ultrices vulputate dui at condimentum. Morbi sit amet urna nec ligula malesuada euismod. Nunc id blandit odio. Integer ornare augue nec elit gravida pulvinar. In at sodales nisl, non auctor purus. Pellentesque at ex varius, vestibulum nisl sit amet, ultricies libero. Nunc vel ultrices libero, sed fringilla sem. Cras at euismod sem.</p>

        <p>Aenean elementum purus vitae nisl ullamcorper, at finibus nulla egestas. In laoreet lectus eget felis gravida, et aliquam est viverra. Cras ut posuere justo, eu interdum lectus. Vestibulum vitae orci ex. Sed mattis mi a porttitor ultrices. Nam cursus orci vel urna posuere consequat. Aliquam erat volutpat. Pellentesque libero ex, lobortis non sagittis in, ultrices ac metus. Proin a felis laoreet, lacinia neque id, accumsan diam. Vestibulum posuere eros eros, laoreet vulputate ipsum viverra non. Aenean iaculis mattis mattis. Proin quis felis a metus vestibulum efficitur. Duis eleifend semper nisl eu auctor. Mauris at lobortis orci.</p>

        <p>Phasellus non ligula ante. Aenean tempor ultricies neque et lacinia. Sed porttitor vitae tellus sit amet ullamcorper. Integer nec urna eget risus interdum venenatis et eu leo. Praesent eu enim nec libero pretium rutrum sed at turpis. Phasellus eget ultricies eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris lorem sem, euismod eu aliquet vel, posuere eu nisi. Aliquam turpis risus, auctor quis quam ut, scelerisque pulvinar massa.</p>
    </main>
</body>
</html>