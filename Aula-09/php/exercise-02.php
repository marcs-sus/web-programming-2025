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
