
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>JENIFAR</title>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://kit.fontawesome.com/f13d6475be.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style>
body {
    color:black;
    background: pink;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}



.head {
    min-width: 1000px;
    background: #000066;
    padding: 15px;
    border-radius:50px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.head:hover{
    min-width: 1000px;
    background: skyblue;
    padding: 15px;
    border-radius:50px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
table.table td a.editsimble {
    color: green;
}
table.table td a.deletesimble {
    color: red;
}
</style>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="head">
                        <center><h2 style="background-color:pink;border-radius:20px;"><b>OFFICE WORKERS DETAILS </b></h2></center>
                    </div>
                     <br/>  <center> <a href="insert.php" style="background-color:green" class="btn btn-secondary"><i class="fa-solid fa-person-circle-plus"></i> <span>New Register</span></a></center><br/>
                    
            
            <table class="table table-striped table-hover">

                    <tr>
                        <th>R_no</th>
                        <th>Profile Pic</th>
                        <th>Name</th>                       
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
 <?php
include('dbconnection.php');
$ret=mysqli_query($con,"select * from tblusers");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><a href="read.php?viewid=<?php echo ($row['ID']);?>" class="view" title="View" ><img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="80" height="80"></a></td>
                        <td><?php  echo $row['FirstName'];?> </td>
                        <td><?php  echo $row['Email'];?></td>                        
                        <td><?php  echo $row['MobileNumber'];?></td>
                        <td> <?php  echo $row['Address'];?></td>
                        <td>
                            
 <a href="edit.php?editid=<?php echo($row['ID']);?>" class="editsimble" title="Update" data-toggle="tooltip">
          <i class="fa-solid fa-pen-to-square"></i> </a>
 <a href="delete.php?delid=<?php echo ($row['ID']);?>&&ppic=<?php echo $row['ProfilePic'];?>" class="deletesimble" title="Delete" data-toggle="tooltip" >
     <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
<?php 
$cnt=$cnt+1;
} }
?>
                
            </table>
        </div>
    </div>
</div>     
</body>
</html>