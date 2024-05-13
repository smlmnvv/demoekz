<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Demo</title>
</head>
<body>
    <main>
        <section class="page my-5">
            <div class="container">
                <h1 class="mb-5 text-center">Демо экзамен</h1>

                    <?php require_once 'pages/auth.php' ?>
                    
                    <?php require_once 'pages/reg.php' ?>

            </div>
        </section>
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html>