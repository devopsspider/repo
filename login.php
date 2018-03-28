<html>
<head></head>
<style>
.col1{
	position:relative;
	width:100%;
	height:100%;
}

.col2{
position: absolute;
    width: 40%;
    height: 55%;
    background-color: #F2F2F2;
    margin-left: 28%;
    margin-top: 8%;	
	
}
.inpt{
	padding: 12px;
   width:55%;
    border-radius: 4px;
    margin-left: 24%;
    border: 1px solid gray;
	
}
.btn{
	margin-left: 40%;
    border-radius: 4px;
    border: none;
    width: 16%;
    height: 10%;
	color:white;
	background-color: #6C7DD0;
}
</style>
<script>
function check(){
	var pwd=document.getElementById('pwd').value;
	if(pwd.length>9){ return false;}
	return true;
}
</script>
<body>
<div class="col1">
	<div class="col2">
	<br>
	<br>
	<br>
		<form method="post" action="">
         <input type="text"  name="uname" placeholder="Enter Your username" class="inpt"><br>
	     <br>
		 <input type="password"  name="pwd" id="pwd" placeholder="Enter Your Password" class="inpt"><br>
	     <br>
		 <input type="submit" onclick='check();' value="login" name="sub" class="btn">
		</form>
	</div>

</div>
</body>
</html>
<?php
include('conn.php');
if(isset($_POST['sub'])){
$name=$_POST['uname'];
$pwd=$_POST['pwd'];	
$sql="select * from signup where uname='$name' and pwd='$pwd'";
$res=$con->query($sql);
$cnt=mysqli_num_rows($res);
if($cnt==1){echo "<script>alert('successfully login');</script>";}else{echo "<script>alert('uname and password wrong');</script>";}



}
?>