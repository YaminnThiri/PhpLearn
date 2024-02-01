<?php 
class Vegatables
{
    protected $name;
    public function __construct($name)
    {
        $this->name=$name;

}
    public function buy(){
        echo" I like $this ->name .I want to eat";
    }
    
}
class Mom extends Vegatables
{
    public function do(){
        echo "Mon is going to the market";
    }
}
$mymon=new Mom("Apple");
$mymon->do();


?>