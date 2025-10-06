<?php
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
