<?php
session_start();

$mysqli = new mysqli("192.168.1.18", "rvmmonitor", "LEAAT32!", "adminRVM");

if (isset($_POST['save-login'])){  

    $name = $_POST['firstname']." ".$_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $address = $_POST['address'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];

    $username = $_POST['usern'];
    $password = $_POST['pw'];
    $confirmPw = $_POST['confirmpw'];

    $mysqli->query("INSERT INTO `Personal_Info` (name,email,contact_no) VALUES ('$name', '$email', '$contact');");

    $mysqli->query("INSERT INTO `Person_Address` (address,barangay,city,postal_no) VALUES ('$address', '$barangay', '$city','$postal')");

    $mysqli->query("INSERT INTO `Employee_LogIn` (role,usern,pw) VALUES ('employee', '$username', '$password');");
    
    $_SESSION['message'] = "Record has been saved.";
    $_SESSION['msg_type']="success";

    header("location: edit-person-info.php");


}

else if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM Personal_Info WHERE user_id=$id");
    $mysqli->query("DELETE FROM Employee_LogIn WHERE user_id=$id");
    $mysqli->query("DELETE FROM Person_Address WHERE user_id=$id");

    $_SESSION['message'] = "Record has been deleted.";
    $_SESSION['msg_type']= "danger";

    header("location: edit-person-info.php");
}
?>