<html>
    <head>
        <title>
            first trying php
        </title>
    </head>
    <body>
        <h1> Heading</h1>
        <p>
            Testing <?php echo 1+2;
            ?>
        
        <?php  $num1=2;
        $num2=3;
        ?>
        Testing:<?php echo $num1+$num2;
        ?>

        <?php $hour=date('h') ?>
        <?php 
        
        if($hour<6 || $hour>16){
            echo " <b> Night Time</b>";
        }
       else{
        echo "<i> Day Time </i>";
       }
    ?>

        <?php 
            $testvar;
            echo gettype($testvar)."<br/>";
            $testvar= 10;
            echo gettype($testvar)."<br/>";
            $testvar= 10.45;
            echo gettype ($testvar)."<br/>";
            $testvar="Hello";
            echo gettype($testvar)."<br/>";
        ?>

        <?php 
        $number=8.45;
        echo $number."<br/>";
        settype($number,"string");
        echo $number."<br/>";
        settype($number,"integer");
        echo $number."<br/>";
        settype($number,"float");
        echo $number."<br/>";
        settype($number,"bool");
        echo $number."<br/>";
     ?>

     <?php
     $testnum=85.639;
     echo $testnum."<br/>";
     echo (string)$testnum."<br/>";
     echo (integer)$testnum."<br/>";
     echo (float)$testnum."<br/>";
     echo (bool)$testnum."<br/>";
     
     ?>

    <?php 
    define("mynum",10);
    define("myname",'susu');
    define("myage",21);

    echo mynum."<br/>";
    echo myname."<br/>";
    echo myage."<br/>";
    ?>
    
    <?php 
    $radius=4;
    $diameter=$radius*2;
    $circumference=M_PI*$diameter;
    $area=M_PI*pow($radius,2);
    echo "The circle has:"."<br/>";
    echo "At radius of".$radius. "<br/>";
    echo "At diameter of".$diameter."<br/>" ;
    echo "At area of".$area ."<br/>";
    ?>

    <?php
     $numone=1;
     $numtwo=$numone+1;
     echo $numtwo."<br/>";
     $numthree=++$numtwo;
     echo $numthree."<br/>";
    $numthree+=1;
     echo $numthree."<br/>";
      ?>

      <?php
      $xx=12;
      $yy=3;
      echo $xx=$yy."<br/>";
      echo $xx>$yy."<br/>";
      echo $xx<=$yy."<br/>";
      echo $xx!=$yy."<br/>";
      ?>


        </p>  
    </body>
</html>