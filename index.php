<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
    require_once('Video.php');
    require_once('Gafanhoto.php');
    require_once('Visualizacao.php');
        
    echo"<pre>";
    $v[0]= new video("Aula 1 de POO");
    $v[2]= new video("Aula 12 de PHP");
    $v[3]= new video("Aula 15 de HTML5");

    print_r($v);

  echo "<br>";
  $g[0]= new Gafanhoto("David", 22, "M","david.dantas");

    print_r($g);
   
    echo "<br>";
    $vis[0]= new Visualizacao($g[0], $v[2]);
    $vis[0]->avaliar(5);
    print_r($vis);
    echo"</pre>";
    ?>
</body>
</html>