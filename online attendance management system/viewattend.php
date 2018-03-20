<?php
$host="localhost";
$user="root";
$pass="";
$data="student";
$db=new mysqli($host,$user,$pass,$data);
?>
<!DOCTYPE>
<html>
<head>
<title>Attendance Table</title>
</head>
<body>
<div class="register">
<?php
$query="select * from attendance";
$run=$db->query($query);
while($row=$run->fetch_array())  :
?>
  <div>
      <h4>rollno:<span><?php echo $row['Roll_No']; ?></span></h4></br>
      <h4>name:<span><?php echo $row['Name']; ?></span></h4></br>
      <h4>subject:<span><?php echo $row['subject']; ?></span></h4></br>
      <h4>semester:<span><?php echo $row['semester']; ?></span></h4></br>
      <h4>attendlecture:<span><?php echo $row['Attendlecture']; ?></span></h4></br></br>
  </div>
<?php endwhile; ?> 
</div>
</body>
</html>
