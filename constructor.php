<?php
class Student{
    public $roll;
    function __construct($enroll){
        echo $this->roll = $enroll;
    }
}
$student = new Student( "Aakash" );
?>