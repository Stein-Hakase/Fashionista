<?php
include_once 'connect.php';
// *******

$sql= "SELECT * FROM heroku_40f9d5d0300dd93.subscribers ;";
$count=0;
// $sql= "SELECT * FROM subscribers ;";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <title>Document</title>
</head>
<body>
 <?php
 if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table'>";
            echo "<tr>";
                echo"<th scope='col'>#</th>";
                echo "<th scope='col' >Full Name</th>";
                echo "<th scope='col'>E-mail</th>";
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            
           if ( $row['Email']!='' ){
            $count=$count+1;
            echo "<tr>";
                echo "<th scope='row'>". $count . "</th>";
                echo "<td>" . $row['FullName'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
            echo "</tr>";}
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

} 
 ?>   
</body>
</html>

