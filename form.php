<?php
//Per prima cosa, recupero i dati passati nella query string
//lettura veloce: https://it.wikipedia.org/wiki/Query_string
//esempio: http://localhost/pagina?chiave=valore&nome=luca&cognome=lambiase
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <h1>Benvenuto <?php echo $nome . " " . $cognome; ?></h1> <a href="index.php">Non sei tu?</a>

    </form>

</body>

</html>