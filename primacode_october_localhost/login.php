
<!DOCTYPE html>
<html>
<head>
<title>PRIMAFOOD Login Page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style >
input,textarea,label,p,h4, h2 {
	font-family: verdana;
	font-size: small;
}

label {
	color: green;
}

body { background-color: azure;}
</style>

</head>
<body>
<div align="center" >

<h4>Primafood - Login Page</h4>

<form name ="form1" action="cms.php" method="get" ;>

<?php if(isset($_GET["error"])) echo "<h4>Error</h4>";?>

<label>Vendor Code: <input type="text" name="login" > </label>  

<br />
<br />
<!-- <label>Password:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="password" ></label> -->

<input type="submit" value="Submit" ><br />
</form>

</div>

</body>
</html>