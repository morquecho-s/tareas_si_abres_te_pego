<?php
    $servername = "localhost";
    $username = "root";
    $password = "sergiomolla160";
    $dbname = "escuela";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM datos";
    mysqli_query($conn, "insert into datos values ('matemáticas')");
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["matricula"]. " - Age: " . $row["materia"]. "<br>";
      }
    } else {
      echo "0 results";
    }
?>
