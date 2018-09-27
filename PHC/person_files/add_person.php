<?php
    include('../basic.php');

    $name = $_POST['name'];
    $ano = $_POST['a_no'];
    $gender = $_POST['sex'];
    $dob = $_POST['date'];
    $v_code = $_POST['v_code'];
    $number = $_POST['c_no'];
    $address = $_POST['address'];
    $v_id = "(select V_ID from village where V_CODE = $v_code)";


    $sql = "INSERT INTO `person`( `P_Name`, `P_AadharNumber`, `P_Gender`, `P_DOB`, `P_VillageID`, `P_Address`, `P_Mobile`) 
    VALUES ( '$name' , $ano , $gender, '$dob', $v_id , ' $address' , $number ) ";

    if($conn->query($sql) === TRUE)
    header("Location:../person.php");

    else
     echo $sql;
?>