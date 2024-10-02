<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
     <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    // prendo i dati dall'url
    // per il paragrafo
        $userParagraph = $_GET["userParagraph"];
    // per la parola da censurare
        $userBadWords = $_GET["userBadWords"];
    // sostituisco la parola da censurare con ***
        $censoredParagraph = str_replace($userBadWords, "***", $userParagraph);
    ?>
    
</body>
</html>