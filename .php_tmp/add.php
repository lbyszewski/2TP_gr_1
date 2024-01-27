<?php
  $one = $_POST['one'];


 

  $conn = mysqli_connect("localhost","root","","my");

  $sql = "INSERT INTO `first`(`name`) VALUES ('$one')";

    $query = mysqli_query($conn,$sql);


    $conn->close();



?>