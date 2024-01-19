<?php
$nums=[12,42,-3,56,25,345];
$i=0;
$result=0;
while($i<count($nums)){
        if($nums[$i]<0){
            $i++;
            continue;
        }
    
        $result+=$nums[$i];
        $i++;
}
echo $result;
?>