<?php
$my_array = [64, 34, 25, 12, 22, 11, 90, 5];

$n = count($my_array);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($my_array[$j] > $my_array[$j + 1]) {
            [$my_array[$j], $my_array[$j + 1]] = [$my_array[$j + 1], $my_array[$j]];
        }
    }
}

echo "Sorted array: " . implode(", ", $my_array);
?>
