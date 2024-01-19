<?php
$width=1;
$length=1;
do{
    $width++;
    $length++;
    $area=$width*$length;
    echo $area."<br/>";

}while($area<1000);
echo "The smallest square over 1000sq ft in area is $width ft * $length ft.";
?>