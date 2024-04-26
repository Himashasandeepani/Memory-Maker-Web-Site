<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form is submitted using POST method
    
        $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
        $message = isset($_POST['message']) ? $_POST['message'] : "";

    $conn = new mysqli('localhost','id21630567_root','memoryMaker&28','id21630567_memorymaker');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contactus(Full_Name, Email, Phone_No, Message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssis",$fullName, $email, $phone, $message);
        $stmt->execute();
        
         $stmt->close();
        header("Location:thank%20you.php");
        exit();
        
        
    }
} else {
    echo "Form not submitted.";
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>