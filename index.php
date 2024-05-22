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
    $transposed_matrix = transposeMatrix($matrix);
    return checkSumRows($transposed_matrix);
}

function transposeMatrix(array $matrix): array {
    $transposedMatrix = [];
    foreach ($matrix as $row => $values) {
        foreach ($values as $column => $value) {
            $transposedMatrix[$column][$row] = $value;
        }
    }
    return $transposedMatrix;
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