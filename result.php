<?php
var_dump($_POST);
$textarea = $_POST['textarea'];
$badword = $_POST['badword'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Result</title>
</head>
<body>
    <div class="container">
        <div>
            <h3>Paragrafo intero</h3>
            <p>
                <?php echo $textarea ?>
            </p>
        </div>
        <div>
            <h3>Paragrafo censurato</h3>
        </div>
    </div>
</body>
</html>