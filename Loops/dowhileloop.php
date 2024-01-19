<?php
//do while
 $nums=[12,42,-3,56,25,345];
 $i=0;
 $result=0;
 do{
    $result+=$nums[$i];
    $i++;
 }while($i<count($nums));
 echo $result;
 ?>