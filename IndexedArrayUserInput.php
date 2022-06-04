<?php
    class IndexedArray {
        static function IndexArray($count) {
            $fruits = array();
            for($i = 0;$i<$count;$i++) {
                $fruits[$i] = readline("Enter Fruit elements:");
            }
            for($i = 0;$i<count($fruits);$i++) {
                echo $fruits[$i] ."\n";
            }
        }
        
    }
    $count = readline("Enter the count:");

    IndexedArray::IndexArray($count);
?>