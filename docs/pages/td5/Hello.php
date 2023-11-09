<?php
$content="Hello World";
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$content?></title>
</head>
<p>
<h1><?=$content?></h1>
<p><?="PHP est capable de parser les variables dans une chaine"?></p>
<p><?="pour éviter la concaténation <b>".$content."</b> des chaines"?></p>
</html>