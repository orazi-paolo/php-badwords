<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="container mt-5">
        <form action="./response.php" method="GET" >
            <div class="mb-3">
                <label for="userParagraph" class="form-label">Paragraph</label>
                <input type="text" class="form-control" id="userParagraph" placeholder="Insert paragraph">
            </div>
            <div class="mb-3">
                <label for="userBadWords" class="form-label">Bad word</label>
                <input type="text" class="form-control" id="userBadWords" placeholder="Insert the bad word"></input>
            </div>
        </form>
    </section>
</body>
</html>