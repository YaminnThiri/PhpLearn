<?php
$hour=date("h");
$year=date("Y");
if($hour>=5 && $hour<=12){
    echo "<h1> Good Morning </h1>";
}else if($hour>=12 && $hour<=18){
    echo "<h1>Good Afternoon</h1>";
}elseif($hour>=18 && $hour<=22){
    echo"<h1> Good evening</h1>";

}else{
    echo "<h1>Good night</h1>";
}

$leapYear=false;

if((($year %4 == 0 ) && ($year % 100 != 0 ))||( $year % 400 = 0))
$leapYear=true;
echo "<p>Did you know that $year is". ($leapYear ?"":"not")."a leap year?</p>";
?>