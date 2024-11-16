<?php
$my_array = [64, 34, 25, 12, 22, 11, 90, 5];

$n = count($my_array);
for ($i = 0; $i < $n ; $i++) {
    for ($j = $i+1; $j < $n ; $j++) {
        if ($my_array[$i] > $my_array[$j]) {
            [$my_array[$i], $my_array[$j]] = [$my_array[$j], $my_array[$i]];
            
        }
    }
}

echo "Sorted array: " . implode(", ", $my_array);
?>
