 <?php
    class IndexArray {
        static function createAndInitializeIntArray() {
            $intArray = array();
            $size = readline("Enter array Size:");
            for($i = 0;$i<$size;$i++) {
                $intArray[$i] = readline("Enter $i element:");
            }
            //self::displayArray($intArray);
            //print_r($intArray);
            var_dump($intArray);

        }
        
        static function displayArray($intArray) {
                echo "\n Array Elements are";
                for($i = 0;$i<count($intArray);$i++) {
                    echo $intArray[$i];
                }
                echo "\n";
        }
        
        static function main() {
            IndexArray::createAndInitializeIntArray();
        }
        function display() {
            $arrayy=array("Yadu",456,"Manu");
            echo "\n array elements are";
            for($i=0;$i<count($arrayy);$i++) {
                echo $arrayy[$i];
            } 
           
        }
    }
     //Invoke static Function
     IndexArray::main();
     $intArray = new IndexArray();
     $intArray->display();

?>