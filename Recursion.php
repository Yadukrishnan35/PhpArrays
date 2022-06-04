<?php
 function display($num) {
     if($num<= 5) {
         echo $num ."\n";
         display($num+1);
     }
 }
display(1);
?>