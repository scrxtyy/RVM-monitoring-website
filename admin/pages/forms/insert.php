<html>
<?php
        $conn = mysqli_connect("192.168.1.18", "rvmmonitor", "LEAAT32!", "adminRVM");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
        $firstname = $_REQUEST['firstname'];
        $lastname= $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $address = $_REQUEST['address'];
        $barangay = $_REQUEST['barangay'];
        $city = $_REQUEST['city'];
        $postal = $_REQUEST['postal'];
        
        $username = $_REQUEST['usern'];
        
        $password = $_REQUEST['pw'];
        $confirmPw = $_REQUEST['confirmpw'];



        if($password==$confirmPw){

        // Attempt insert query execution
        $sql = "INSERT INTO `Personal_Info` (first_name,last_name,email,contact_no) VALUES ('$firstname','$lastname', '$email', '$contact');";
        $sql2 = "INSERT INTO `Person_Address` (address,barangay,city,postal_no) VALUES ('$address', '$barangay', '$city','$postal')";
        $sql3 = "INSERT INTO `Employee_LogIn` (role,usern,pw) VALUES ('employee', '$username', '$password');";
        if(mysqli_query($conn, $sql)){
                mysqli_query($conn,$sql2);
                mysqli_query($conn,$sql3);

                echo "<script type='javascript'>alert('Record successfully added.');</script>";

                header("location:basic_elements.php");

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
    }
        ?>

        </html>