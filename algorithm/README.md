# Here is my algorithm code:
<?php
    function miniMaxSum($arr) {
        $total_sum = array_sum($arr);
        $min_sum = $total_sum - max($arr);
        $max_sum = $total_sum - min($arr);
        echo $min_sum . ' ' . $max_sum . "\n";
    
        // Bonus: Count total of array
        $total_count = count($arr);
        echo "Total count: " . $total_count . "\n";
    
        // Bonus: Find min in array
        $min_num = min($arr);
        echo "Minimum number: " . $min_num . "\n";
    
        // Bonus: Find max in array
        $max_num = max($arr);
        echo "Maximum number: " . $max_num . "\n";
    
        // Bonus: Find even elements in array
        $even_nums = array_filter($arr, function($num) {
            return $num % 2 == 0;
        });
        echo "Even numbers: " . implode(', ', $even_nums) . "\n";
    
        // Bonus: Find odd elements in array
        $odd_nums = array_filter($arr, function($num) {
            return $num % 2 != 0;
        });
        echo "Odd numbers: " . implode(', ', $odd_nums) . "\n";
    }
    
    // Read input from the user
    $input_nums = readline("Enter five space-separated integers: ");
    $arr = explode(' ', $input_nums);
    
    $arr = array_map('intval', $arr);
    
    // Call the function with the input array
    miniMaxSum($arr);
?>