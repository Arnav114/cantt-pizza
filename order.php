<?php

if(isset($_POST['sub'])){

    $conn= mysqli_connect('localhost','root','','pizzacantt');

    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }


}

?>