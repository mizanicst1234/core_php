<?php

if(isset($_GET["class"])){
    echo $_GET["class"];
    $class=$_GET["class"];
}

if(isset($_GET["method"])){
    echo $_GET["method"];
}

if(isset($_GET["id"])){
    echo $_GET["id"];
}

${$class}=new $class;

${$class}->index();

class Cattles{

   function __construct(){
       echo "Test";
    }

    function index(){
        include("home.php");
    }
}
?>