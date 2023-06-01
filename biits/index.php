<?php

if (isset($_POST['name'])) {



    $_server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database faild due to " . mysqli_connect_error());
    }

    $_name = $_POST['name'];
    $_Father_name = $_POST['fname'];
    $_Date_of_Birth = $_POST['dob'];


    $sql = "INSERT INTO `data.data` (`name`,`Father_name` , `School_name`, `Date_of_Birth`) VALUES ('$name,'$Father_name','$School_name','$Date_of_Birth',current_timestamp());";

    if ($con->query($sql) == true) {
        echo "SuccessFull Insert ";
    } else {
        echo "error :$sql <br> $con -> error";
    }

    $con->close();

}
?>

