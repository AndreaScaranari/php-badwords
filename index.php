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
    <main>
        <form action="script.php" method="GET" class="container d-flex flex-column gap-3 py-5">
            <textarea class="p-3" name="paragraph" placeholder="Inserisci del testo..."></textarea>
            <input class="p-3" type="text" placeholder="Inserisci la parola da censurare..." name="censored_word">
            <button>Send!</button>
        </form>
    </main>
</body>
</html>