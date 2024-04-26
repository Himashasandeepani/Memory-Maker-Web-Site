<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Plan</title>
    <link href="images/logo.jpg" rel="icon" type="image/x-icon" >
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: #3A3B3C;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        h1{
            color:#413839;
        }
        th{
            background-color: #3A3B3C;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>    
</head>
<body>
<h1><center>PREMIUM PLAN</center></h1>
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

        $sql = "SELECT *from premium";
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