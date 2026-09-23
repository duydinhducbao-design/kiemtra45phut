<?php
function generateFibonacci($n) {
    $fibonacci = array(); 
    for ($i = 0; $i < $n; $i++) {
        if ($i == 0) {
            $fibonacci[$i] = 0; 
        } elseif ($i == 1) {
            $fibonacci[$i] = 1; 
        } else {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    }
    return $fibonacci;
}
$soPhanTu = 10;
$daySo = generateFibonacci($soPhanTu);
echo "Dãy Fibonacci gồm $soPhanTu phần tử đầu tiên là: <br>";
foreach ($daySo as $viTri => $giaTri) {
    echo "F($viTri) = $giaTri <br>";
}
?>