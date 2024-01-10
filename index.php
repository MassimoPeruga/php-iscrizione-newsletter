<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap -->
</head>

<body>

    <div class="container mt-5">
        <h1>PHP Iscrizione Newsletter</h1>

        <?php
        // Verifica se il form è stato inviato
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["email"])) {
                $email = $_GET["email"];
                $message = verificaEmail($email);

                // Mostra l'alert di Bootstrap
                echo '<div class="alert alert-' . ($message == "La mail è ben formata." ? "success" : "danger") . ' mt-3" role="alert">' . $message . '</div>';
            }
        }
        ?>

        <form action="index.php" method="get" class="row align-items-end">
            <div class="form-group col">
                <label for="email">Indirizzo Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Controlla Email</button>
            </div>
        </form>
    </div>

</body>

</html>