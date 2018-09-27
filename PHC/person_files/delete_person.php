<?php
    include('../basic.php');

        $row = $_POST['row'];
        echo $row;
        $sql = "Delete From person where P_ID = $row";

        if(!$conn->query($sql) === TRUE)
        { echo "Something went wrong";}
?>