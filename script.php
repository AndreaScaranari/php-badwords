<?php

$paragraph = trim($_GET['paragraph']);
$censored_word = trim($_GET['censored_word']);
$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace($censored_word, '***', $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="text-center py-3">
        <h1>NON SI PUO' PIU' DIRE NULLA!</h1>
        <h2>La censura fai da te</h2>
    </header>
    <main>
        <div class="container">
            <p>Il testo originale che i <i>poteri forti</i> vogliono censurare è: <b><?= $paragraph ?></b></p>
            <p>La lunghezza di questo testo è pari a: <b><?= $paragraph_length ?> caratteri</b></p>
            <hr>
            <p>Il paragrafo censurato dai poteri forti è: <b><?= $censored_paragraph ?></b></p>
            <p>La lunghezza del testo rimaneggiato da Bill Gates è pari a: <b><?= $censored_paragraph_length ?> caratteri</b></p>
        </div>
    </main>
    <footer class="text-center">
        <a href="index.php">Back to Main Page!</a>
    </footer>
</body>
</html>