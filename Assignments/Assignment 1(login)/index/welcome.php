<html>
<head>
</head>
<title>Welcome Page</title>
<body>
<style>
body{
	background-image:url(abstract-background-7.jpg);
	font-size:100px;
	font-style:oblique;
	font:"Times New Roman", Times, serif;
	color:#FFF;
	im
	
}
</style>
</body>
</html>

<?php
//echo "";
if(isset($_COOKIE["user"]))
{
	$user=$_COOKIE["user"];
	echo"welcome,$user"."<br/>";
	
}
else
{
	header('Location:Login.php');
}

if(isset($_POST['btnLogout']))
{
	setcookie("user","$user",time()-10);
	header("Refresh:0");
}

?>