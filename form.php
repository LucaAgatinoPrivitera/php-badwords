<?php
//Per prima cosa, recupero i dati passati nella query string
//lettura veloce: https://it.wikipedia.org/wiki/Query_string
//esempio: http://localhost/pagina?chiave=valore&nome=luca&cognome=lambiase
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$nomeCognome = ["nome"] + ["cognome"];
$nomeCognomeNum = (int)strlen($nome) + (int)strlen($cognome);
//Da chiedere perché non va


$nomeCognomeNot = (int)$nome + (int)$cognome; //da chiedere perché è sbagliato

$insulto = $_GET["insulto"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">

    <h1>Benvenuto <?php echo $nome . " " . $cognome; ?></h1> <a href="index.php">Non sei tu?</a>
    <p>Il tuo nome è lungo: <?php echo strlen("$nome"); ?> caratteri</p>
    <p>Il tuo cognome è lungo: <?php echo strlen("$cognome"); ?> caratteri</p>
    <p>Insieme invece sono lunghi: <?php echo strlen("$nomeCognomeNum"); ?></p>
    <!-- Da chiedere è possibile fare l'addizione senza creare una variabile? -->

    <p>Il tuo insulto è: <?php echo  str_replace($insulto,'--', '***'); ?></p>
    <p>Il tuo insulto è lungo: <?php echo strlen("$insulto"); ?> caratteri</p>
    </form>

</body>

</html>