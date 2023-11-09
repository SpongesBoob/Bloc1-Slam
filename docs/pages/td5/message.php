<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=devicce-width, user-scalable=no, initial-scale=1,0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>message</title>
</head>
<body>
<?php
extract($_GET);
$color = $color ?? "black";
$size = $size ?? "12";
$message = $message ?? "Hello World";
?>
<p style="color:<?=$color?>; font-size: <?=$size?>px;">
    <?=$message?>
</p>
<h2>urls de test</h2>
<ul>
    <li>
        <a href="?message=Texte en vert de taille 20&size=20&color=green">Vert</a>
    </li>
    <li>
        <a href="?message=Texte en rouge de taille 30&size=30&color=rec">Rouge</a>
    </li>
    <li>
        <a href="?message=Texte en bleu de taille 50&size=50&color=blue">Bleu</a>
    </li>
</ul>
<?=$_GET["message"]??"pas de message"?>
</body>
</html>