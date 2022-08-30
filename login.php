<?php

$host="localhost";
$user="root";
$password="";
$db="nlp";

$aVar= mysqli_connect($host,$user,$password,$db);


if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $pass=$_POST['pass'];



    $result=mysqli_query($aVar,"select * from paymentt where email='".$uname."'AND password='".$pass."' limit 1");

    if(mysqli_num_rows($result)==1){

          echo file_get_contents("loadingtry.html");
        exit();
    }
    else{

        echo file_get_contents("loadingtry2.html");
        exit();
    }

}
?>
