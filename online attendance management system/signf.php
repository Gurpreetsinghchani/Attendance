<?php
$host="localhost";
$user="root";
$pass="";
$db="student";
$con=mysqli_connect($host,$user,$pass)or die("not connect");
mysqli_select_db($con,$db);
?>
<!DOCTYPE HTML>
<HTML>
<head>
<title>sign in</title>
<style>
.form
{
height:450px;
width:600px;
border:1px solid #088a68;
position:relative;
left:350px;
top:100px;
background-color:black;
opacity:0.6;
filter: alpha(opacity=60);
}
h2,input
{
height:30px;
width:250px;
position:relative;
left:80px;
top:90px;
color:#088a68;
}
#sin
{
height:40px;
width:120px;
position:relative;
top:120px;
left:120px;
}
a
{
height:10px;
width:90px;
position:relative;
top:80px;
left:120px;
display:block;
background-color:#088a68;
color:black;
text-decoration:none;
margin-left:140px;
border:1px solid #a4a4a4;
padding:15px;
}
a:hover
{
display:block;
background-color:#bdbdbd;
}
body
{
    background:url('signs.jpg') no-repeat;
    background-size:cover;
}
h3
{
color:white;
}
</style>
</head>
<div class="form">
<body>
<form action="" method="post">
<?php
 if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$match="select * from faculty where  fname='$username' && password='$password' ";
	$run=$con->query($match);
	$count=mysqli_num_rows($run);
	if($count>0)
	{
		echo "<h3><center>You are sucessfully login</center></h3>";
                header("refresh:2; url=http://localhost/hack/faculattend.html");
	}
	else

	{
		echo "<h3><center>Please enter correct username or password</center></h3>";
	}
}
?>
<h2>username:</h2>
<input type="text" name="username" placeholder="username" />
<h2>password:</h2>
<input type="password" name="password" placeholder="password" /></br>
<input id="sin" type="submit" name="submit" value="sign in" />
<a href="faculty.php">sign up</a>
</form>
</body>
</div>
</html>