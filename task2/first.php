<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="col-lg-4">
  <h2>Delta Task 2</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="rollnumber">Roll Number:</label>
      <input type="rollnumber" class="form-control" id="rollnumber" placeholder="Enter Roll Number" name="rollnumber">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <button type="insert" name="insert" class="btn btn-default">Insert</button>
    <button type="update"  name="update" class="btn btn-default">Update</button>
    <button type="delete"  name="delete" class="btn btn-default">Delete</button>
    <!-- <button type="" class="btn btn-default">Submit</button> -->
  </form>
 <div class="container" style="width:500px;">
    <h3>Search by name</h3>
    <form action="action.php" method ="POST">
    <label>Enter Name</label><br>
    <input type="text" name="name1" id="name1" placeholder="search ..">
    <input type="submit" name="nsearch" id="nsearch" value="Search">
    <a href="#" id="namelist1"></a>
</form>
 </div>
  <script> 
  $(document).ready(function()
  {
     $('#name1').keyup(function()
     {
        var query = $(this).val();
        // alert(query);
         if(query!= '')
          { $.ajax({ url:"search.php",
           method:"POST",
            data:{query:query},
             success:function(data)
              {
                 $('#namelist1').fadeIn(); 
                 $('#namelist1').html(data); 
              } 
            }); 
                 } 
                 else{
                   $('#namelist1').fadeOut();
                   $('#namelist1').html("";)
                 }
                 }); 
                 $(document).on('click', 'li', function()
                 { 
                   $('#name1').val($(this).text()); 
                   $('#namelist1').fadeOut(); 
                   }); 
                   }); 
    </script>








    <div class="container2" style="width:500px;">
    <h3>Search by Roll Number</h3>
    <form action="action2.php" method ="POST">
    <label>Enter Roll Number</label><br>
    <input type="text" name="name2" id="name2" placeholder="search ..">
    <input type="submit" name="nsearch2" id="nsearch2" value="Search">
    <a href="#" id="namelist2"></div>
</form>
 </div>
  <script> 
  $(document).ready(function()
  {
     $('#name2').keyup(function()
     {
        var query2 = $(this).val();
        // alert(query)
         if(query2!= '')
          { $.ajax({ url:"search2.php",
           method:"POST",
            data:{query:query2},
             success:function(data)
              {
                 $('#namelist2').fadeIn(); 
                 $('#namelist2').html(data); 
              } 
            }); 
                 } 
                 else{
                   $('#namelist2').fadeOut();
                   $('#namelist2').html("";)
                 }
                 }); 
                 $(document).on('click', 'li', function()
                 { 
                   $('#name2').val($(this).text()); 
                   $('#namelist2').fadeOut(); 
                   }); 
                   }); 
    </script>
</body>

<?php 

    if(isset($_POST['insert']))
    {
        // echo "hi";
        mysqli_query($link,"insert into table1 values('NULL',$_POST[rollnumber],'$_POST[name]')");
    }
    if(isset($_POST['delete']))
    {
        mysqli_query($link,"delete from table1 where Roll_Number=$_POST[rollnumber]") or die (mysqli_error($link));
    }
    if(isset($_POST['update']))
    {
        mysqli_query($link,"update table1 set name='$_POST[name]' where Roll_Number=$_POST[rollnumber]") or die (mysqli_error($link));
    }
?>



</html>
