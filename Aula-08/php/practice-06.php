<?php
$matrix = [
    ['Disciplina', 'Faltas', 'Média'],
    ['Matemática', 5, 8.5],
    ['Português', 2, 9],
    ['Geografia', 10, 6],
    ['Educação Física', 2, 8]
];

echo "<table border='1'>";
foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
