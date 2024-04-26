<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form is submitted using POST method
    
        $fullName = isset($_POST['username']) ? $_POST['username'] : "";
        $Date = isset($_POST['Date']) ? $_POST['Date'] : "";
        $et = isset($_POST['event']) ? $_POST['event'] : "";
        $review = isset($_POST['review']) ? $_POST['review'] : "";

    $conn = new mysqli('localhost','id21630567_root','memoryMaker&28','id21630567_memorymaker');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into review(Name, Date, Event, Review) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$fullName, $Date, $et, $review);
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