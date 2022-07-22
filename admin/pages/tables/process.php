<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "adminRVM");

        $update=false;  
        $id = 0;
        $firstname = '';
        $lastname = '';
        $email = '';
        $contact = '';
    
        $address = '';
        $barangay = '';
        $city = '';
        $postal = '';
    
        $username = '';
        $password = '';
        $rvmassign = '';


if (isset($_POST['save-login'])){  

    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $address = $_POST['address'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];

    $username = $_POST['usern'];
    $password = $_POST['pw'];
    $confirmPw = $_POST['confirmpw'];

    $rvm_assign = $_POST['rvm-assign'];

    $_SESSION['message'] = "Record has been saved.";
    $_SESSION['msg_type']="success";

    $mysqli->query("INSERT INTO `Personal_Info` (first_name,last_name,email,contact_no) VALUES ('$firstname', '$lastname', '$email', '$contact');");

    $mysqli->query("INSERT INTO `Person_Address` (address,barangay,city,postal_no) VALUES ('$address', '$barangay', '$city','$postal')");

    $mysqli->query("INSERT INTO `Employee_LogIn` (role,usern,pw) VALUES ('employee', '$username', '$password');");
    
    $mysqli->query("INSERT INTO `RVM_Assign` (rvm_id) VALUES ('$rvm_assign');");

    header("location: edit-person-info.php");


}

else if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM Personal_Info WHERE user_id=$id");
    $mysqli->query("DELETE FROM Employee_LogIn WHERE user_id=$id");
    $mysqli->query("DELETE FROM Person_Address WHERE user_id=$id");
    $mysqli->query("DELETE FROM RVM_Assign WHERE user_id=$id");

    $_SESSION['message'] = "Record has been deleted.";
    $_SESSION['msg_type']= "danger";

    $person_infoMax = intval($mysqli->query("SELECT MAX( `user_id` ) FROM `Personal_Info` ;"));
    $login_Max = intval($mysqli->query("SELECT MAX( `user_id` ) FROM `Employee_LogIn` ;"));
    $address_Max = intval($mysqli->query("SELECT MAX( `user_id` ) FROM `Person_Address` ;"));
    $assign_Max = intval($mysqli->query("SELECT MAX( `user_id` ) FROM `RVM_Assign` ;"));

    $mysqli->query("ALTER TABLE `Personal_Info` AUTO_INCREMENT = $person_infoMax;");
    $mysqli->query("ALTER TABLE `Employee_LogIn` AUTO_INCREMENT = $login_Max;");
    $mysqli->query("ALTER TABLE `Person_Address` AUTO_INCREMENT = $address_Max;");
    $mysqli->query("ALTER TABLE `RVM_Assign` AUTO_INCREMENT = $assign_Max;");

    header("location: edit-person-info.php");
}

else if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update=true;
    $result1 = $mysqli->query("SELECT * FROM Personal_Info WHERE user_id = $id");
    $result2 = $mysqli->query("SELECT * FROM Person_Address WHERE user_id = $id");
    $result3 = $mysqli->query("SELECT * FROM Employee_LogIn WHERE user_id = $id");
    $result4 = $mysqli->query("SELECT * FROM RVM_Assign WHERE user_id = $id");
    
    if((mysqli_num_rows($result1)==1)&&(mysqli_num_rows($result2)==1)&&(mysqli_num_rows($result3)==1)){
        $row1 = $result1->fetch_array();

        $id = $row1['user_id'];
        $firstname = $row1['first_name'];
        $lastname = $row1['last_name'];
        $email = $row1['email'];
        $contact = $row1['contact_no'];
        
        $row2 = $result2->fetch_array();

        $address = $row2['address'];
        $barangay = $row2['barangay'];
        $city = $row2['city'];
        $postal = $row2['postal_no'];
    
        $row3 = $result3->fetch_array();
        $username = $row3['usern'];
        $password = $row3['pw'];

        $row4 = $result4->fetch_array();
        $rvmassign=$row4['rvm_id'];
    }
}

else if(isset($_POST['update'])){
    $id=$_POST['id'];

    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $address = $_POST['address'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];

    $username = $_POST['usern'];
    $password = $_POST['pw'];

    $_SESSION['message'] = "Record has been updated.";
    $_SESSION['msg_type']= "warning";

    $mysqli->query("UPDATE `Personal_Info` SET first_name='$firstname', last_name ='$lastname', email='$email', contact_no='$contact' WHERE user_id='$id';");
    $mysqli->query("UPDATE `Person_Address` SET address='$address', barangay ='$barangay', city='$city', postal_no='$postal' WHERE user_id='$id';");
    $mysqli->query("UPDATE `Employee_LogIn` SET role='employee', usern ='$username', pw='$password' WHERE user_id='$id';");

    header("location: edit-person-info.php");

}


?>