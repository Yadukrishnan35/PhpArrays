<?php
class TwoDimensionalArray
{
    function multi()
    {
        /*
            $person = array (
                array("Yadu",23),
                array("Manu",25),
                array("sanal",26),
                array("Arun",24)
            );
            */
        $twoDArray = array();
        $row = readline("Enter the Row Size:");
        $col = readline("Enter the Column Size:");
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                $twoDArray[$i][$j] = readline("Enter $i,$j element:");
            }
        }
        self::display($twoDArray, $row, $col);
    }
    static function display($twoDArray, $row, $col)
    {
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                echo $twoDArray[$i][$j] . " ";
            }
            echo "\n";
        }
    }
}
$twod = new TwoDimensionalArray();
$twod->multi();
?>