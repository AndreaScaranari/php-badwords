<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <header class="text-center py-3">
        <h1>NON SI PUO' PIU' DIRE NULLA!</h1>
        <h2>La censura fai da te</h2>
    </header>

    <main>
        <form action="script.php" method="GET" class="container d-flex flex-column gap-3">
            <textarea class="p-3" name="paragraph" placeholder="Inserisci ciò che non ci dicono..."></textarea>
            <input class="p-3" type="text" placeholder="Inserisci la censura dei poteri forti..." name="censored_word">
            <button>Send!</button>
        </form>
    </main>
</body>
</html>