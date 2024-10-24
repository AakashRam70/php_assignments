<?php
class Mobile{
    public $model;
    function showModel(){
        echo $this->model;
    }
}
$obj = new Mobile;
$obj->model = "New One";
$obj->showModel();
?>