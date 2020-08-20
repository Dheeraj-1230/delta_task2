<?php

include "connection.php";

if(isset($_POST['query'])){
    $output='';
    // $inptext=$_POST['query'];
    $query="SELECT 	Roll_Number FROM table1 WHERE Roll_Number LIKE '%".$_POST["query"]."%' ";
    $result=mysqli_query($link,$query);
    $output='<ul class="list-unstyled">';
    if(mysqli_num_rows($result) > 0)
    {
    while($row=mysqli_fetch_array($result))
    {
       $output .='<li>'.$row["Roll_Number"].'</li>';
    }
}
else{
    $output .='<li>Name not found</li>';
}
$output .='</ul>';
echo $output;
}

?>