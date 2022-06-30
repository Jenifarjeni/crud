<?php 
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	$uid=$_GET['userid'];
  $ppic=$_FILES["profilepic"]["name"];
   $oldppic=$_POST['oldpic'];
$oldprofilepic="profilepics"."/".$oldppic;

$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));

$allowed_extensions = array(".jpg","jpeg",".png",".gif",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif  /pdf format allowed');</script>";
}
else
{
$imgnewfile=time().$extension;

move_uploaded_file($_FILES["profilepic"]["tmp_name"],"profilepics/".$imgnewfile);
     $query=mysqli_query($con, "update tblusers set ProfilePic='$imgnewfile' where id='$uid' ");
    if ($query) 
    {
    	unlink($oldprofilepic);
    echo "<script>alert('Profile pic updated successfully');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Img Update</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
body {
	color: #fff;
	background: pink;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: lightblue;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
</style>
</head>
<body>
<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data">
 <?php
$eid=$_GET['userid'];
$ret=mysqli_query($con,"select * from tblusers where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
		<center><h2  style="color:black">Update </h2></center>
		<p class="hint-text">Update your profile</p>
<input type="hidden" name="oldpic" value="<?php  echo $row['ProfilePic'];?>">
	<div class="form-group">
<img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="120" height="120">
		</div>

         <div class="form-group">
        	<input type="file" class="form-control" name="profilepic"  required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div> 

		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
              <?php 
}?>
    </form>

</div>
</body>
</html>