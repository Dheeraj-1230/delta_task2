<?php 

include "connection.php";
if(isset($_POST['nsearch']))
{
    $data=$_POST['name1'];
    $sql="SELECT * FROM table1 WHERE Name='$data' ";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();
    echo "Roll Number:".$row['Roll_Number']."<br>";
    echo "Name:".$row['Name']."<br>";
}

?>
