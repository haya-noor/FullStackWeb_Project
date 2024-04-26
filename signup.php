<?php
//if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Database connection
    $dbhost     = "localhost";
    $dbname     = "student_db";
    $dbusername = "root";
    $dbpassword = "";
    
    // Get user input from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email     = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password  = $_POST['password'];
   
    //create connection
    $conn = new mysqli($dbhost,$dbname, $dbusername, $dbpassword) or die("Unable to connect");
    echo "Great work!!";
    // if ($conn->connect_error) {
    //     die("Connection failed: ". $conn->connect_error);
    // }

    // prepare statement
    $stmt = $conn->prepare("INSERT INTO student_form (firstname, lastname, email, phonenumber, address, password) VALUES (?, ?, ?, ?, ?, ?)");
    
    // execute query
    if($stmt->execute())
    {
        echo "Registration successfull";
    }else{
        echo "Registratio failed. Try again";
    }
    // close connection
    $stmt->close();
    $conn->close();

    // echo success message
   // header('Location: login.php');
?>

