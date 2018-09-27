<?php
    include('../basic.php');

        $row = $_POST['row'];
        echo $row;
        $sql = "Delete From village where V_ID = $row";

        if(!$conn->query($sql) === TRUE)
        { echo "Something went wrong";}
?>