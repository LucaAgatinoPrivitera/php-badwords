<?php
$prova = "Metti il tuo nome e cognome (questo è scritto in \$prova, qui ho usato la \)";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <h1><?php echo $prova; ?></h1>
    <form action="form.php" method="GET">

        <input type="text" placeholder="Scrivi il tuo nome" name="nome">
        <input type="text" placeholder="Scrivi il tuo cognome" name="cognome">

        <button type="submit">Invia</button>

    </form>
</body>

</html>