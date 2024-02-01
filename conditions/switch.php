<?php
//switch
    $day=date("D");
switch($day){

    case"Sat":
        case"Sun":
            echo "Weekday";
            case "Fri":
            echo "TGIF";
        default:
            echo "Weekday";      
  }

?> 