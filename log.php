<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html>
	
<head>
	<title>wellcome</title>
	<style>

	h1 {
color: white;
text-shadow: 4px 4px 8px #000000;
background-color: yellow;
text-align: center;
margin-right: 400px;
margin-left: 400px;
border-radius: 20px;
}

		.button {
padding: 15px 25px;
font-size: 24px;
text-align: center;
cursor: pointer;
outline: none;
color: #fff;
background-color: grey;
border: none;
border-radius: 15px;
box-shadow: 0 9px #999;
}
.button:hover {background-color: #green}
.button:active {
background-color: #green;
box-shadow: 0 5px #666;
transform: translateY(4px);
}
	</style>

</head>
<?php
	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		$sql="INSERT INTO login(username, password) VALUES ('$username', '$pass')";
		$result=$conn-> query($sql);
        header('location:log_in.php');
	}
	?>
<body>
<h1>WELLCOME CREATE USERNAME </h1>
	<form action="#" method="POST"><center>
	<p>Username<input type="text" name="username" placeholder="wrete your name" required></p>
	<p>password<input type="password" name="pass" placeholder="wrete your password" required></p>
	<p><button><input type="submit" name="submit" value="NEXT" class="button"></button></p></center>
</form>
</body>
</html>