<?php
    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $detais=$_POST['details'];
    $date=$_POST['date'];
    $price=$_POST['price'];
    $conn =new mysqli("localhost","root","","project1");
    if($conn->connect_error){
        die("Failed to connect : ".$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into donationform(fname, lname, email, phone, address, details, date, price)
                values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssissii",$fname, $lname, $email, $phone, $address, $details, $date, $price);
        $stmt->execute();
        echo " Form submitted successfully...";
        $stmt->close();
        $conn->close();
        
    }
?>