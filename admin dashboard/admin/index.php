<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
	<style>
		body {
	background-image: url(background.jpg);
	background-repeat: no-repeat;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 600px;
	border: 2px solid #ccc;
	padding: 30px;
	background: rgba(255, 255, 255, 0.138);
	border-radius: 15px;
	backdrop-filter: blur(1px);
	z-index: 10;
	overflow: hidden;
	border-top: 1px solid rgba(255,255,255,0,2);
	border-left: 1px solid rgba(255,255,255,0,2);
	box-shadow: 5px 5px 30px rgba(0,0,0,0,0.2);

}
form{
	background:rgba(0,0,0,0.2)
}

h2 {
	text-align: center;
	margin-bottom: 40px;
	font-weight: 600;
	color: white;
    font-size: 30px;
}

input {
	display: block;
	border: 2px solid rgba(204, 204, 204, 0.693);
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
    background: rgba(255,255,255,0.77);
}
label {
	color: rgb(255, 255, 255);
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: rgb(104, 5, 5);
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	opacity: 0.7;
}

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

a {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
button:hover{
	opacity: 1;
}
	</style>
<body>
     <form action="login.php" method="post">
     	<h2>ADMIN DASHBOARD</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User name</label>
     	<input type="text" name="uname" placeholder="User name"><br>

     	<label>password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>