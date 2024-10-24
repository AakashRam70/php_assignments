<!-- The mechanism of deeriving a new class from an old one is called inheritance or deriivation. -->


<!-- Super Class and Sub Class -->
<!-- The old class is reffered to as the Super class and the new one is called the Sub class. -->

<!-- Inheritance -->
<!-- Single Inheritance -->
 <!-- If a class is derived from one base class (Parent Class), it is called Single Inheritance.   -->
<?php
class Father{
    public $a;
    public $b;
    function getValue($x,$y){
        $this->a = $x;
        $this->b = $y;
    }
}
class Son extends Father{
    function display(){
        echo "Your selected values for A is : $this->a <br>";
        echo "Your selected values B is : $this->b";
    }
}
$obj = new Son;
$obj->getValue(10, 20);
$obj->display();
?>
