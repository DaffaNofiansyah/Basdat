
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Registrasi</title>
</head>
<body>
    <div>
        <form action="proseslogin.php" method="post">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
            </table>
            <input type="submit" name="login" value="Sign In">
        </form>
    </div>

    <div>
        
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'gagal_nama')
                {
                    echo "Nama tidak terdaftar";
                }
                if($_GET['status'] == 'gagal_username')
                {
                    echo "username tidak terdaftar";
                }
                if($_GET['status'] == 'gagal_password')
                {
                    echo "password salah";
                }
                if($_GET['status'] == 'gagal_confirm_password')
                {
                    echo "confirm password salah";
                }
            ?>
        </p>
        <?php endif; ?>
    </div>
</body>
</html>