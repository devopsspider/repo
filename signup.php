<html>
<head></head>
<style>
.col1{
width:100%;
height:100%;
position:relative;
}
.col2{
	position: absolute;
    background-color: #d3d4d6;
    width: 30%;
    height: 60%;
    margin-left:28%;
    margin-top:6%;

}
.inpt{
	width: 90%;
    height: 15%;
    border-radius: 4px;
    border: 1px solid gray;	
	margin-left:2%;

	}

.btn{
	width: 40%;
    height: 10%;
    border-radius: 4px;
    border: 1px solid gray;
    color: white;
    background-color: #2d40cc;
	margin-left:5%;
}


</style>
<body>
<div class="col1">
	<div class="col2">
	<br>
		<form method="post" action="">
		<input type="text" name="fname" class="inpt" placeholder="Enter First Name"><br>
		<br>
		<input type="text" name="lname"  class="inpt" placeholder="Enter Last Name"><br>
		<br>
		<input type="text" name="uname" class="inpt" placeholder="Enter User Name"><br>
		<br>
		<input type="password" name="pwd" class="inpt" placeholder="Enter Your Password"><br>
		<br>
		<a href="login.php"><button class="btn">Login</button></a>
     	<input type="submit" name="sign" value="Signup" class="btn">

		</form>	 
	</div>
	
	
</div>
</body>
</html>
<?php
include('conn.php');
if(isset($_POST['sign'])){
$fnm=$_POST['fname'];
$lnm=$_POST['lname'];
$nm=$_POST['uname'];
$pwd=$_POST['pwd'];
$sql="insert into signup values('$fnm','$lnm','$nm','$pwd')";
$con->query($sql);
}
?>