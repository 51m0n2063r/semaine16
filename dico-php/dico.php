<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Combien de mots contient ce dictionnaire ?</h3>
    <?php
    $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
    $dico = explode("\n", $string);
    echo(count($dico));
    ?>
    <br>
    <h3>Combien de mots font exactement 15 caractères ?</h3>
    <?php
    $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
    $dico = explode("\n", $string);
    foreach($dico as $mot){
        if(strlen($mot)==15){
            $length++;
        } 
    }
    echo $length;
    ?>
    <br>
    <h3>Combien de mots contiennent la lettre « w » ?</h3>
    <?php
    foreach($dico=='w'){
    echo stristr($, 'w');
    ?>
</body>
</html>