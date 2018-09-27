<?php
    include('../basic.php');

    $name = $_POST['name'];
    $code = $_POST['ecode'];
    $ano = $_POST['a_no'];
    $gender = $_POST['sex'];
    $dob = $_POST['date'];
    $number = $_POST['c_no'];
    $s_number = $_POST['sc_no'];
    $gender = $_POST['sex'];

    $sql = "INSERT INTO `ashaworker`( `A_EmployeeID`, `A_Name`, `A_DOB`, `A_AadharNumber`, `A_PhotoURL`, `A_Mobile`, `A_Secondary_Mobile`, `A_Posted_VillageID` , A_Gender) 
    VALUES ($code , '$name' , '$dob'  ,$ano , '-' , $number , $s_number , 0 , $gender) ";

    if($conn->query($sql) === TRUE)
    header("Location:../ashaworker.php");

    else
     echo $sql;
?>