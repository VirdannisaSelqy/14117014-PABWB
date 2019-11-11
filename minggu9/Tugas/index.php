<html>
<head>
	<title>Index</title>
</head>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">LOGIN</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
            <br>
            <br>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
            <br>
            <br>
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		
		</form>
		
	</div>
 
 
</body>
</html>