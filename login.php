<html>
	<br><br>
	<body>
		<center>
		<h3>Form Login</h3>
		<form action="proses_login.php" method="POST">
			<input type="text" name="username" placeholder="USERNAME" required="required" />
			<br><br>
			<input type="password" name="password" placeholder="PASSWORD" required="required" />
			<br><br>
			<input type="submit" value="SUBMIT"/><br><br><br>
		</form>
		</center>

		<center>
		<h3 style="margin-left:5px;">Form Daftar</h3>
		<form id=form_daftar action="proses_daftar.php" method="POST">
					<fieldset style="width: 10%;">
					 <form onsubmit="return validate()">
						<input type="text" name="fn" placeholder="Nama Lengkap" size="20" style="margin-top:10px;" required><br><br>
						<select  name="jk" style="width:100%;" required>
							 <option selected disabled>Jenis Kelamin</option>
							 <option value="Laki-laki">Laki-laki</option>
							 <option value="Perempuan">Perempuan</option>
						</select><br><br>
						<input type="email" name="email" placeholder="Email" size="20" required><br><br>
						<input type="text" name="un" placeholder="Username" size="20" required><br><br>
						<input type="password" name="pass" placeholder="Password" size="20" required><br><br>
						<input type="submit" id="submit" value="Register" style="margin-left:50px;">
					</form>
				</fieldset>
		<centre>
	</body>
<html>
