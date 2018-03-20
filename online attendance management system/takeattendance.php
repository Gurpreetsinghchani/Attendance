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
<title>Take Attendance</title>
<style>
.register
{
border:2px solid #848484;
height:500px;
width:100%;
}
</style>
<head>
<body>
<form action="" method="post">
<div class="register">
<table cellpadding="25px">
<tr>
<th>RollNo</th>
<th>Name</th>
<th>Present/Absent</th>
<th>Subject</th>
<th>semester</th>
<th>AttendLecture</th>
</tr>

<tr>
<td><input type="text" name="rollno" placeholder="Enter the Rollno"</td>
<td><input type="text" name="name" placeholder="Enter the Name"</td>
<td><input type="checkbox" name="present[]"/>Present</td>
<td><input type="text" name="subject" placeholder="Enter the Subject"</td>
<td><input type="text" name="semester" placeholder="Enter the semester"</td>
<td><input type="text" name="lecture" placeholder="Enter the AttendLecture"</td>
</tr>


</table>
</div>
<input type="reset" />
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
 if(!empty($_POST['present']))
{
  $rollno=$_POST['rollno'];
 $name=$_POST['name'];
 $subject=$_POST['subject'];
 $semester=$_POST['semester'];
 $lecture=$_POST['lecture'];
  
 $insert="insert into attendance(Roll_No,Name,subject,semester,Attendlecture)values('$rollno','$name','$subject','$semester','$lecture')";
 $run=$con->query($insert);
}
}
else
{
	echo "not connect";
}
?>

