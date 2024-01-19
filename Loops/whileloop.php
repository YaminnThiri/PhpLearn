<?php 
//while loop
$nums=[12,42,-2,8,621];// assign array
$i=0;//initial
$result=0;
// count is the fun for array length
while($i<count($nums)){
    $result+=$nums[$i];
    $i++;//loop count
}
echo $result;
?>