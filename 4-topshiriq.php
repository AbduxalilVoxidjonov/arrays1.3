<?php 
$array = [1, 2, 3, 3, 4, 4, 4, 5, 5, 5, 5, 5, 5];
$results = removeDuplicates($array);

foreach ($results as $result) {
    echo $result . "<br>";
}



function removeDuplicates($array) {
    $result1 = [];
    $result2 = [];
    $result1 =  array_count_values($array);

     foreach ($result1 as $key => $value) {
        if ($value > 2 ) {
            for ($i = 0; $i < 2; $i++) {
                $result2[] = $key;
            }
        }else {
            $result2[] = $key;
        }
    }
    return $result2;
}
?>
