<?php
    include('../basic.php');

    $pincode = $_POST['v_pincode'];
    $code = $_POST['v_code'];
    $name = $_POST['name'];
    $state = $_POST['s_name'];
    $district = $_POST['d_name'];
    $population = $_POST['p_no'];

    $sql = "INSERT INTO `village`(`V_NAME`,`V_CODE` , `V_PINCODE`, `V_DISTRICT`, `V_STATE`, `V_Population`) VALUES 
    ( '$name' , $code , $pincode , '$district' , '$state' , $population ) ";

    if($conn->query($sql) === TRUE)
    header("Location:../village.php");

    else
     echo $sql;
?>