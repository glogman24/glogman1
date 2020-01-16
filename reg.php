<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>wellcome</title><style>

	h1 {
color: green;
text-shadow: 4px 4px 8px #000000;
background-color: yellow;
text-align: center;
margin-right: 350px;
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
.button:hover {background-color: #3e8e41}
.button:active {
background-color: #3e8e41;
box-shadow: 0 5px #666;
transform: translateY(4px);
}

		</style>
</head>
<h1><b><i><center>WELLCOME REGISTER TO CONTINUE</center></i></b></h1>

<?php

	if (isset($_POST['submit'])) {
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lastname=$_POST['lastname'];
		$age=$_POST['age'];
        $sindex=$_POST['sindex'];
        $date=$_POST['date'];
		$sql="INSERT INTO register(	fname, mname, lastname, age, sindex, dateb ) VALUES ('$fname', '$mname', '$lastname', '$age', '$sindex', '$date')";
		$result=$conn->query($sql);
		header("location:log.php");	
		}		
	?>
<body bgcolor="">
<form action="#" method="POST"><center>
<p>FIRST NAME <input type="text" name="fname" placeholder="your first name" required></p>
<p>MIDDLE NAME <input type="text" name="mname" placeholder="your middle name" required></p>
<p>LAST NAME <input type="text" name="lastname" placeholder="your last name" required></p>
<p>AGE <input type="text" name="age" placeholder="your age" required></p>
<p>INDEX NUMBER <input type="text" name="sindex" placeholder="your number" required></p>
<p>DATE <input type="date" name="date" placeholder="your date" required></p>
<input type="submit" name="submit" value="NEXT" class="button"></center>
</form>
</body>
</html>