<?php
require './function/function.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <div class="container bg-success-subtle mt-5">
        <div class="row justify-content-center d-flex">

            <h1 class="text-success py-4 text-center">Genera la tua nuova password super sicura!</h1>


            <form class="text-center pb-2" action="index.php">

                <input name="characterNumber" type="number" min="6" max="24" method="GET">
                <button type="submit" class="ms-2 btn btn-sm btn-outline-primary">Genera!</button>


            </form>

            <?php
            echo 'La tua nuova password é:' . '<h2 class="text-center py-2">' . $finalPassword . '</h2>';
            ?>
        </div>
    </div>
</body>

</html>