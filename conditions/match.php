<?php 
//match
$day=date("D");
$result=match($day){
"Sat","Sun"=>"Weekend",
"Fri"=>"TGIF",
default=>"Weekday"
};
echo $result;

?>