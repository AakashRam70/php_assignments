<!-- In PHP destructor are called when you explicitly destroy an object or when all references to the obhect go out of scope. -->
 <!-- destructor have a special name in PHP __destruct. -->
 <?php
class Student{
    public $roll;
    function __construct($enroll){
        echo "para Constructor Called <br>";
        $this->roll = $enroll;
        echo $this->roll;
    }
    function __destruct(){
        echo "<br>Object Trashed";
    }
}
$student = new Student("Aakash");
?>