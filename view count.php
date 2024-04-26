<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Odyssey</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "id21630567_root";
        $password = "memoryMaker&28";
        $dbname = "id21630567_memorymaker";
        
        // Connect to MySQL
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }
    
        // Get the current date
        $currentDate = date('Y-m-d');
    
        // Check if a record for the current date exists
        $result = $conn->query("SELECT * FROM views WHERE date = '$currentDate'");
    
        if ($result->num_rows > 0) {
            // If the record exists, update the view count
            $conn->query("UPDATE views SET view_count = view_count + 1 WHERE date = '$currentDate'");
        } else {
            // If the record doesn't exist, insert a new one
            $conn->query("INSERT INTO views (date, view_count) VALUES ('$currentDate', 1)");
        }
    

        $conn->close();
    ?>
    
</body>

</html>