<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link href="images/logo.jpg" rel="icon" type="image/x-icon" >
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: #045D5D;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        th{
            background-color: #045D5D;
            color: white;
        }
        h1{
            color:#033E3E;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>    
</head>
<body>
<h1><center>CUSTOMER'S REVIEW</center></h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Event</th>
            <th>Review</th>
            
        </tr>
        <?php
        $conn = mysqli_connect('localhost','id21630567_root','memoryMaker&28','id21630567_memorymaker');
        if ($conn-> connect_error) {
            die("Connection failed:".$conn-> connect_error);
        }

        $sql = "SELECT *from review";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["Name"] ."</td><td>" . $row["Date"] ."</td><td>" . $row["Event"] ."</td><td>" . $row["Review"] ."</td></tr>"; 
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