<?php 
include('dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
   $ppic=$_FILES["profilepic"]["name"];
   
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));

$allowed_extensions = array(".jpg","jpeg",".png",".gif",".pdf");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif /pdf format allowed');</script>";
}
else
{
$imgnewfile=time().$extension;
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"profilepics/".$imgnewfile);
$query=mysqli_query($con, "insert into tblusers(FirstName, MobileNumber, Email, Address,ProfilePic) value('$fname', '$contno', '$email', '$add','$imgnewfile' )");
if ($query)
{
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
}"<script>alert('Something Went Wrong. Please try again');</script>";
}
}
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Insert</title>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://kit.fontawesome.com/f13d6475be.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
body {
	color: #fff;
	background: pink;
	font-family: 'Roboto', sans-serif;
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
    <form  method="POST" enctype="multipart/form-data" >
	<center>	<h2  style="color:black">Register</h2></center>
		<p class="hint-text"></p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder=" Name" required="true"></div>
				
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" placeholder="Mobile Number" required="true" maxlength="10" pattern="[7-9]{1}[0-9]{9}">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email id" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="address" placeholder="Address" required="true"></textarea>
        </div>  
             <div class="form-group">
        	<input type="file" class="form-control" name="profilepic"  required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>      
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
    	<div>
    	    <br><center>
	      <button name="button" style="border:2px solid gold"><a href="index.php"><i class="fa-solid fa-circle-left"></i>Back</a></button>
	      </center></div>
        </div>
    </form>
</div>
</body>
</html>