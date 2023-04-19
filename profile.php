<html>
<head>
	<title>LOGIN FORM</title>
</head>
<body>
	<h1>Welcome</h1>
    <?php
        session_start();
        echo $_SESSION['loginname'];
        if(!isset($_SESSION['login'])|| $_SESSION['login'] !== true){
            header ('location: login.php');
        }
    ?>
	<form  method="post" action="logout.php">

		<button type="submit"> Logout</button>
	</form>
</body>
</html>