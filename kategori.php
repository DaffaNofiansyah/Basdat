<?php
include("config.php");
$id = $_GET['id'];
$query = pg_query("SELECT * FROM users WHERE id = '$id'");
$users = pg_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Pilih kategori</h1>
    </header>

    <main>
        <nav>
            <ul>
				<li><a href="<?php echo "nasi.php?id=".$_GET['id']?>">nasi</a></li>
				<li><a href="<?php echo "mie.php?id=".$_GET['id']?>">Mie</a></li>
                <li><a href="<?php echo "fastfood.php?id=".$_GET['id']?>">Fastfood</a></li>
                <li><a href="<?php echo "ayam.php?id=".$_GET['id']?>">Ayam</a></li>
                <li><a href="<?php echo "bebek.php?id=".$_GET['id']?>">Bebek</a></li>
			</ul>
        </nav>
    </main>
    <br>
    <div>
        <a href=" <?php echo "halamanutama.php?id=".$id ?>">Kembali</a>
    </div>

</body>
</html>