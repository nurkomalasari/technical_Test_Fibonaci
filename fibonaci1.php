<?php
function fibonacci($number_n, $first = 0, $second = 1)
{

    $number_start = [$first, $second];
    for ($i = 1; $i < $number_n; $i++) {
        $number_start[] = $number_start[$i] + $number_start[$i - 1];
    }
    return $number_start;
}

$number_n = $_POST['number_n'];
$hasil = fibonacci($number_n);
echo json_encode($hasil);
