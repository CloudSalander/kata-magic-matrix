<?php 
define('ARRAY_SIZE',3);

$matrix = [[2,7,6],
           [9,5,1],
           [4,3,8]];

function isMagicMatrix(array $matrix): bool {
    if(checkSumRows($matrix) && checkSumColums($matrix) && checkSumDiagonals($matrix)) return true;
    return false;
}

function checkSumRows(array $matrix): bool {
    $row_con = 1;
    $sum = array_sum($matrix[0]);
    while($row_con < ARRAY_SIZE) {
        if($sum != array_sum($matrix[$row_con])) return false;
        ++$row_con;
    }
    return true;
}

function checkSumColums (array $matrix): bool {
    $column_con = 0;
    $sum = 0;
    while($column_con < ARRAY_SIZE) {
        $row_con = 0;
        $sum_aux = 0;
        while($row_con < ARRAY_SIZE) {
            $sum_aux += $matrix[$column_con][$row_con];
            ++$row_con;
        }
        if($column_con == 0) $sum = $sum_aux;
        else {
            if($sum != $sum_aux) return false;
        }
        ++$column_con;
    }
    return true;
}

function checkSumDiagonals(array $matrix): bool {
    return false;
}

if(isMagicMatrix($matrix)) {
    echo "És una matriu màgica!";
}
else {
    echo "NO és una matriu màgica!";
}
?>