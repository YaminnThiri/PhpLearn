<!DOCTYPE html>
<html>
    <head>
        <title> Even ,odd and prime from 1 to 10 </title>
    </head>
    <body>
        <table border="2px">
             <tr>
                <th>Odd numbers<br/>Even numbers</th>
               
                <th>Prime Numbers</th>
            </tr>
            <tr> 
                <td><?php 
            $count=10;
            $i=1;
            do{
                if($i%2==0){
                    echo "$i is even number"."<br/>";}
                    else {
                        echo "$i is odd number"."<br/>";
                    }
                    $i++;
                }while($i<=$count);?> </td>
             <?php
                    for($i=2;$i<=$count;$i++){
                    if($i%2==0){ 
                        switch($i){ 
                            case 2: ?>
                            <td> <?php  echo "$i prime number"."<br/>";
                            break;
                             default:
                            echo "__________"."<br/>";
                            break;
                                }
                        }else {
                        switch($i){ 
                            case 3:
                            case 7:
                            echo "$i  prime number"."<br/>";
                             break;
                                default:
                        echo "__________ "."<br/>";
                        break;
                 }
                 }
            }?> </td>

            </tr>

         </table>
    </body>

</html>

