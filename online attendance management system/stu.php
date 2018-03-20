<?php
$host="localhost";
$user="root";
$pass="";
$db="student";
$con=mysqli_connect($host,$user,$pass)or die("not connect");
mysqli_select_db($con,$db);
?>
<!DOCTYPE>
<html>
<head>
<title>student</title>
<style>
input
{
height:30px;
width:220px;
}
.student
{
height:540px;
width:300px;
border:1px solid #088a68;
padding:60px;
margin-left:400px;
color:#0489b1;
}
body
{
background:url('signup.jpg') no-repeat;
background-size:cover;
}
</style>
</head>
<body>
<div class="student">
<h2>Student Registration</h2>
<?php
if(isset($_POST['submit']))
{
 $rollno=$_POST['rollno'];
 $password=$_POST['password'];
 $name=$_POST['username'];
 $father=$_POST['fname'];
 $date=$_POST['birth'];

 if(empty($rollno))
  echo "please enter rollno";
 else if(empty($password))
  echo "please enter password";
 else if(empty($name))
  echo "please enter username";
 else if(empty($father))
  echo "please enter father name";
 else 
 {
//if(isset($_POST['submit']))
//{
// $rollno=$_POST['rollno'];
// $password=$_POST['password'];
// $name=$_POST['username'];
// $father=$_POST['fname'];
//$date=$_POST['birth'];

 $insert="insert into student(Roll_No,password,Name,FatherName,Date_of_birth)values('$rollno','$password','$name','$father','$date')";
 $run=$con->query($insert);
 header("refresh:2; url=http://localhost/hack/signin.php");
}
}
?>
<form action="" method="post">
<h3>Student Roll No:</h3>
<input type="text" name="rollno" placeholder="Roll No"/>
<h3>Student Password:</h3>
<input type="password" name="password" placeholder="password"/>
<h3>Student Name:</h3>
<input type="text" name="username" placeholder="username"/>
<h3>Father's Name:</h3>
<input type="text" name="fname" placeholder="Father Name"/>
<h3>Date of Birth:</h3>
<input type="text" name="birth" placeholder="YYYY/MM/DD"/></br>
<input type="submit" name="submit" value="submit"/>
</form>
</div>
</body>
</html>