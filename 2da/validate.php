<?php
    $username=$_POST["username"];
    $password=$_POST["password"];

    function is_authenticated($username,$password){
        return ($username == "admin" && $password == "123");
    }

    if (! is_authenticated($username,$password)){
       header('Location:error.html');
    }else{
        header("Location:home.html");
    }

?>