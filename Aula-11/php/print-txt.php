<?php
$filePath = "../data/data.txt";
$filePath2 = "../data/data2.txt";

if (file_exists($filePath)) {
    $fileContent = file_get_contents($filePath);
    echo nl2br(htmlspecialchars($fileContent));

    if (!file_exists($filePath2)) {
        touch($filePath2);
    }

    file_put_contents($filePath2, serialize($fileContent));
    echo "<br>Serialized data written to data2.txt";
} else {
    echo "File not found.";
}
