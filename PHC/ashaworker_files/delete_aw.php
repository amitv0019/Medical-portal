<?php
    include('../basic.php');

        $row = $_POST['row'];
        echo $row;
        $sql = "Delete From ashaworker where A_ID = $row";

        if(!$conn->query($sql) === TRUE)
        { echo "Something went wrong";}
?>