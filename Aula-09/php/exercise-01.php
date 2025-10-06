<?php
$grades = [10, 8, 7, 6, 3, 4, 5, 2, 3, 8, 9, 9, 5, 4, 1];
$misses = [false, true, false, true, false, true, false];

function avgGrades($grades)
{
    $sum = array_sum($grades);
    $avg = $sum / count($grades);
    return $avg;
}

function checkApproval($avg)
{
    if ($avg >= 7) {
        return "Aprovado por notas";
    } else {
        return "Reprovado por notas";
    }
}

function calcFrequency($misses)
{
    $totalMisses = count(array_filter($misses));

    if ($totalMisses / count($misses) > 0.7) {
        return "Reprovado por faltas";
    } else {
        return "Aprovado por frequência";
    }
}

echo "Média: " . avgGrades($grades) . "<br>\n";
echo checkApproval(avgGrades($grades)) . "<br>\n";
echo calcFrequency($misses);
