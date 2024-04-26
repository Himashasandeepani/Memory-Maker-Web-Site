<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Plan</title>
    <link href="images/logo.jpg" rel="icon" type="image/x-icon" >
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: #3C91E6;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        h1{
            color:#2F539B;
        }
        th{
            background-color: #3C91E6;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>    
</head>
<body>
    <h1><center>BASIC PLAN</center></h1>
    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Venue</th>
            <th>Event type</th>
            <th>Event Name</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost','id21630567_root','memoryMaker&28','id21630567_memorymaker');
        if ($conn-> connect_error) {
            die("Connection failed:".$conn-> connect_error);
        }

        $sql = "SELECT *from basic";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["Full_Name"] ."</td><td>" . $row["Email"] ."</td><td>" . $row["Date"] ."</td><td>" . $row["Venue"] ."</td><td>" . $row["Event_Type"] ."</td><td>" . $row["Event_Name"] ."</td></tr>"; 
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