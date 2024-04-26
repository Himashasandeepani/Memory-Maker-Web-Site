<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="images/logo.jpg" rel="icon" type="image/x-icon" >
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: #2F0909;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        h1{
            color:#43302E;
        }
        th{
            background-color: #2F0909;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>    
</head>
<body>
<h1><center>CONTACT US</center></h1>
    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone N0</th>
            <th>Message</th>
            
        </tr>
        <?php
        $conn = mysqli_connect('localhost','id21630567_root','memoryMaker&28','id21630567_memorymaker');
        if ($conn-> connect_error) {
            die("Connection failed:".$conn-> connect_error);
        }

        $sql = "SELECT *from contactus";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["Full_Name"] ."</td><td>" . $row["Email"] ."</td><td>" . $row["Phone_No"] ."</td><td>" . $row["Message"] ."</td></tr>"; 
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
    </table>                      
</body>
</html>