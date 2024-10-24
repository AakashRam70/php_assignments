<!-- PHP supports a special type of method called constructor for initializing an object when it is created. This is known as automatic initialization of objects. -->
<?php
class Student{
    public $roll;
    function __construct($enroll){
        echo $this->roll = $enroll;
    }
}
$student = new Student( "Aakash" );
?>