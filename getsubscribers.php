<?php
include_once 'connect.php';
// *******

$sql= "SELECT * FROM heroku_40f9d5d0300dd93.subscribers ;";
// $sql= "SELECT * FROM subscribers ;";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Full Name</th>";
                echo "<th>E-mail</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['FullName'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
            echo "</tr>";
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
// header('location: get.php')
?>


