<?php 
 $startTime=microtime(true);
 for($num=1;microtime(true)<$startTime+0.001;$num=$num*2){
    echo "current number:$num<br/>";
 }
 echo "out of time!";
?>