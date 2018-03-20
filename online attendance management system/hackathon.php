<!DOCTYPE>
<html>
<head>
<title>Attendance Management System</title>
<style>
.head
{
height:100px;
background:#2e2e2e;
width:100%;
color:white;
text-align:center;
padding:20px;

}
.mid
{
height:50px;
width:100%;
background:#088a68;
padding:25px;
}
ul
{
margin-right:170px;
float:right;
display:block;
background-color:#2e2e2e;
font-size:20px;
padding:10px;
}
ul:hover
{
display:block;
background-color:#088a68;
}
a
{
text-decoration:none;
color:white;
}
.mySlides
{
position:absolute;
height:500px;
width:100%;
border:1px solid #000000;
}
</style>
<script>
var image = ["stu5.jpg","stu3.jpg","stu4.jpg"];
var i=0;
function slide()
{
document.getElementById("one").src=image[i];
if(i<(image.length-1))
i++;
else 
i=0;
}
setInterval(slide,2000)
</script>
</head>
<body>
<div class="head"><h1>Online Attendance Management System</h1></div>
<div class="mid">
<ul><a href="signin.php">Logout</a></ul>
<ul><a href="hacabout.html">About</a></ul>
<ul><a href="signf.php">Faculty</a></ul>
<ul><a href="signin.php">Student</a></ul>
<ul><a href="hackathon.php">Home</a></ul>
</div>
<img class="mySlides" id="one"  src="stu4.jpg"/>

</body>
</html>