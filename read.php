<?php
include('dbconnection.php');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Deatils</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}


</style>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
                <div class="row">
                    <div class="col-sm-5">
                        <h2 style="cursor:pointer" onclick="window.print()">Details</h2>
                    </div>
<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblusers where ID =$vid");

while ($row=mysqli_fetch_array($ret)) {

?>
                </div>
<table class="display table table-bordered" id="hidden-table-info">
               
<tbody>
    <tr>
        <td><img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="200" height="250"></td>
		<td></td>
         </tr> 
    
    <tr>
    <th>Name</th>
    <td><?php  echo $row['FirstName'];?></td>
    </tr>
  <tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
    </tr>
    <tr>
    <th>Mobile No</th>
    <td><?php  echo $row['MobileNumber'];?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row['Address'];?></td>
    </tr>
 
<?php 
}
?>
         
</table>
       
    </div>
</div>     
</body>
</html>