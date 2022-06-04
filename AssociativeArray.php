<?php
    class IntArray {
        static function associativeArray() {
            $intArray = array();
            $size = readline("Enter array size:");
            for($i = 0;$i<$size;$i++) {
                $key = readline("Enter key name:");
                $intArray[$key] = readline("Enter element:");
            }
            foreach($intArray as $k => $v) {
                echo $k  ." => ". $v. "\n";
            }
            var_dump($intArray);
            print_r($intArray);
        }

    }
    IntArray::associativeArray();
?>