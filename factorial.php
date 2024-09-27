<?php
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number']; 
    $result = factorial($number); 
    echo "<h1>Factorial of $number is $result</h1>"; 
}
?>