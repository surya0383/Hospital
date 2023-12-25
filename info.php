<?php
require_once('connect.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $massage=$_POST['massage'];
    



$sql="INSERT into hospital(name, phone, mail, massage) values('$name', '$phone', '$mail', '$massage')";


if($db->query($sql)){
    echo"Data Inserted Successfully";
    header('location:thanks.php');
}

}


?>