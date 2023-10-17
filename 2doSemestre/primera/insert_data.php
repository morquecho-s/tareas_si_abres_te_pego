<?php
    $servername = "localhost";
    $username = "root";
    $password = "sergiomolla160";
    $dbname = "escuela";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $matricula = $_POST['matricula'];
    $materia = $_POST['materia'];
    $sql = "insert into datos values ($matricula,'$materia')";
    mysqli_query($conn, $sql);

    header("location:post.html");
   

    
?>
