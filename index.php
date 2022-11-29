
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Registrasi</title>
</head>
<body>

    <?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses')
            {
				echo "Registrasi berhasil! silahkan login";
			} 
            else 
            {
				echo "Registrasi gagal!";
			}
		?>
	</p>
	<?php endif; ?>

    <div>
        <form action="prosesregistrasi.php" method="post">
            <table>
                <tr>
                    <td><label for="nama_lengkap">Nama Lengkap: </label></td>
                    <td><input type="text" name="nama_lengkap" required></td>
                </tr>
                <tr>
                    <td><label for="no_telp">Nomor Telepon: </label></td>
                    <td><input type="text" name="no_telp" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="username">Username: </label></td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" name="password" required></td>
                </tr>
            </table>
            <input type="submit" name="register" value="Sign Up">
            
        </form>
    </div>

    <div>
        <p>Sudah punya akun? <a href="lamanlogin.php">Login di sini</a></p>
    </div>
</body>
</html>