<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
    <?php require_once 'functions.php'; ?>
</head>
<header>
    <h1>Aula 09</h1>
</header>

<body>
    <?php
    foreach (glob("exercise-0*.php") as $file) {
        $name = basename($file);
        echo "<p><a href='$file'>$name</a></p>";
    }
    ?>
    <hr>
    <?php
    $grades = [10, 8, 7, 6, 3, 4, 5, 2, 3, 8, 9, 9, 5, 4, 1];
    $misses = [false, true, false, true, false, true, false];
    ?>

    <h4>Média</h4>
    <p><?php echo avgGrades($grades); ?></p>
    <h4>Situação por notas</h4>
    <p><?php echo checkApproval(avgGrades($grades)); ?></p>
    <h4>Situação por faltas</h4>
    <p><?php echo calcFrequency($misses); ?></p>
</body>

</html>