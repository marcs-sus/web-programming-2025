<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
</head>
<header>
    <h1>Atividade 10</h1>
</header>

<body>
    <h3>Árvore de diretórios</h3>

    <?php
    $dirs = [
        "bsn" => [
            "3a Fase" => [
                "desenvWeb",
                "bancoDados 1",
                "engSoft 1"
            ],
            "4a Fase" => [
                "Intro Web",
                "bancoDados 2",
                "engSoft 2"
            ]
        ]
    ];

    function drawDirTree($dirs)
    {
        echo "<ul>";
        foreach ($dirs as $dir => $subdirs) {
            echo "<li>$dir";
            if (is_array($subdirs)) {
                drawDirTree($subdirs);
            }
            echo "</li>";
        }
        echo "</ul>";
    }

    drawDirTree($dirs);
    ?>
</body>

</html>