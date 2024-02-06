<!DOCTYPE html>
<html>
    <head>
        <title>Homing piegon Simulator</title>
        <link rel="stylesheet" type="text/css" href="commom.css"/>
        <style type="text/css">
                div.map{
                    float:left;
                    text-align: center;
                    border:1px solid #666;
                    background-color: #fcfcfc;
                    margin: 5px;
                    padding: 1em;
                     }
                     span.home,span.pigeon{
                        font-weight: bold;
                     }
                     span empty{
                        color:#666;
                     }
            </style>
    </head>
    <body>
        <?php
        $mapsize=10;
        do{
            $homeX=rand(0,$mapsize-1);
            $homeY=rand(0,$mapsize-1);
            $pigeonX=rand(0,$mapsize-1);
            $pigeonY=rand(0,$mapsize-1);

        }while ((abs($homeX-$pigeonX)<$mapsize/2) && (abs($homeY-$pigeonY)<$mapsize/2));


        do{
            if($pigeonX<$homeX){
                $pigeonX++;
            }else if($pigeonX>$homeX){
                $pigeonX--;
            }

            if($pigeonY<$homeY){
                $pigeonY++;
            }else if($pigeonY>$homeY){
                $pigeonY--;
            }

            echo '<div class="map" style="width:'. $mapsize.'em;"><pre>';

            for($y=0;$y<$mapsize;$y++){
                for($x=0;$x<$mapsize;$x++){
                    if($x==$homeX && $y==$homeY){
                        echo'<span class="home">+</span>';
                       
                    }else if($x==$pigeonX && $y==$pigeonY){
                        echo'<span class="pigeon">%</span>';
                    }else{
                        echo'<span class="empty">.</span>';
                    }

                    echo ($x!=$mapsize-1)?"":"";
                }
                echo"\n";
            }
            echo"</pre></div>\n";
            
        }while($pigeonX != $homeX || $pigeonY !=$homeY);

        ?>
    </body>
</html>