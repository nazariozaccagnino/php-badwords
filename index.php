<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>PHP badwords</title>
</head>

<body>
    <header>
        <div class="text-center">
            <h1>PHP badwords</h1>
        </div>
    </header>
    <main class="container">
        <h3>Inserire testo</h3>
        <div class="mb-3">
            <form action="result.php" method="post">
                <textarea class="form-control" rows="3" name="textarea"></textarea>
        </div>
        <h3>Inserire parola da censurare</h3>
        <div>
            <input type="text" class="form-control mb-3" name="badword">
            <button type="submit" class="btn btn-success">Invia</button>
        </div>
        </form>
    </main>
</body>

</html>