<?php
$name3=(string)readline("Enter your first color: ");
$name4=(string)readline("Enter your second color:");
$result=new Display($name3,$name4);
echo "\n Mising them:\n";
$result->display();
$result->color("grey");

class Colormixing
{
    protected $name1;
    protected $name2;
    public function __construct($name1,$name2)
    {
        
        $this->name1=$name1;
        $this->name2=$name2;

    }
    public function color($final){
        echo "You mixed $this->name1 with $this->name2 :Final result is $final color";
         }
}
class Display extends Colormixing
{
    public function display()
    {
        echo "Final result is:";
    }
}
?>
