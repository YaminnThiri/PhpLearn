<?php 

class Animal
{
    private $name;

    public function __construct($name)
    {
       $this->name=$name;
     }
    public function run(){
        echo"$this->name is running...";
    }

}
$dog=new Animal("Bobby");
$dog->run();
?>

<?php
class People
{
    public function __construct(private $name)
    {
        //
    }
    public function eat(){
        echo"$this->name is eating strawberry";
    }
} 
$lili=new People("Suzy");
$lili->eat();
?>


