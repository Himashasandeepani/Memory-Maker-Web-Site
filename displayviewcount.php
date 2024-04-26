<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Count</title>
    <link href="images/logo.jpg" rel="icon" type="image/x-icon" >
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: #4B0082;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        th{
            background-color: #4B0082;
            color: white;
        }
        h1{
            color:#2E1A47;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>    
</head>
<body>
<h1><center>VIEW COUNT</center></h1>
    <table>
        <tr>
            <th>Date</th>
            <th>View Count</th>
              
        </tr>
        <?php
        $conn = mysqli_connect('localhost','id21630567_root','memoryMaker&28','id21630567_memorymaker');
        if ($conn-> connect_error) {
            die("Connection failed:".$conn-> connect_error);
        }

        $sql = "SELECT *from views";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["date"] ."</td><td>" . $row["view_count"] ."</td></tr>"; 
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