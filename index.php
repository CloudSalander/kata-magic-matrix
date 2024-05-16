<?php 

$matrix = [[2,7,6],
           [9,5,1],
           [4,3,8]];

function isMagicMatrix(array $matrix): bool {
    if(checkSumRows($matrix) && checkSumColums($matrix) && checkSumDiagonals($matrix)) return true;
    return false;
}

function checkSumRows(array $matrix): bool {
    return false;
}

function checkSumColumns(array $matrix): bool {
    return false;
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