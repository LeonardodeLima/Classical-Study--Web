<?php
    $con=mysqli_connect("localhost","root","","db_catalogo");

    // consulta SQL
    $query = mysqli_query($con, 'SELECT * FROM `video` WHERE  id=1');
    $escrever = mysqli_fetch_array($query);
?>
