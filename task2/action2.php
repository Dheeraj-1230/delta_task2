<?php 

include "connection.php";
if(isset($_POST['nsearch2']))
{
    $data=$_POST['name2'];
    $sql="SELECT * FROM table1 WHERE Roll_Number='$data' ";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();
    echo "Roll Number:".$row['Roll_Number']."<br>";
    echo "Name:".$row['Name']."<br>";
}

?>
