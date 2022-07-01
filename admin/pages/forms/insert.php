<?php
$link = mysqli_connect("192.168.1.18", "rvmmonitor", "LEAAT32!", "adminRVM");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$name = $first_name.$last_name;
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$barangay = mysqli_real_escape_string($link, $_REQUEST['barangay']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$postal = mysqli_real_escape_string($link, $_REQUEST['postal']);

$username = mysqli_real_escape_string($link, $_REQUEST['usern']);

$password = mysqli_real_escape_string($link, $_REQUEST['pw']);
$confirmPw = mysqli_real_escape_string($link, $_REQUEST['confirmpw']);

$sql = "SELECT * FROM `Employee_LogIn` BY user_id DESC LIMIT 1;";
$result = $link->query($sql);
$id=$result;
echo $name;
echo $email;
echo $contact;
echo $address;
echo $barangay;
echo $city;
echo $postal;
echo $username;
echo $password;

if($password==$confirmPw){
    $id+=1;
// Attempt insert query execution
$sql = "INSERT INTO `Personal_Info` (user_id,name,email,contact_no) VALUES ('$id','$name', '$email', '$contact'); INSERT INTO `Person_Address` (user_id,address,barangay,city,postal_no) VALUES ('$id','$address', '$barangay', '$city','$postal'); INSERT INTO `Employee_LogIn` (user_id,role,usern,pw) VALUES ('$id','employee', '$username', '$password');";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
else{
    echo "Passwords do not match.";
}
?>