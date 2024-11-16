<?php
function maxElements($array) {

    $nums = array_count_values($array);
    
    $maxCount = max($nums);
    
    $most_nums = array_keys($nums, $maxCount);
    
    return [
        'element' => $most_nums,
        'count' => $maxCount
    ];



}


$array = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4,5,5,5,5,5,5];
$result = maxElements($array);

echo "Element: ".($result['element'][0])."<br>";
echo "Count: ".($result['count'])."<br>";


?>
