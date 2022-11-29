<?php
include("config.php");

if(isset($_POST['login']))
{

	$id = $_GET['id'];
	$query = pg_query("SELECT * FROM users WHERE id = '$id'");
	$users = pg_fetch_array($query);

}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" href="style.php" media="screen"> -->
	<title>P.MAKAN</title>
</head>

<body>

	<header>
        <div class="header_atas">
            <h1>HALAMAN UTAMA</h1>
        </div>

        <!-- <div class="header_bawah">

		</div> -->
			
    </header>

    <main>
		<div>
			<nav>
				<ul>
					<li><a href="<?php echo "kategori.php?id=".$_GET['id']?>">Pesan</a></li>
					
					<li><a href="<?php echo "pesanan.php?id=".$_GET['id']?>">Lihat Pesanan</a></li>
				</ul>
			</nav>
		</div>
	</main>
	<br>
    <div>
        <a href="index.php">Log Out</a>
    </div>

	<?php if(isset($_GET['status'])): ?>
		<p>
			<?php
				if($_GET['status'] == 'sukses')
				{
					echo "Pesanan berhasil!";
				} 
				else 
				{
					echo "Pesanan gagal";
				}
			?>
		</p>
	<?php endif; ?>





	<!-- <header>
		<h1>Ini halaman utama</h1>
		<h2>Ini menunya</h2>
	</header>

	<h4>Makanannya</h4>
	<table border="4">
		<tr>
			<th>Makanan</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Pesan</th>
		</tr>

		<tr>
			<th><img src="assets\images\nasi_goreng.jpg" alt="Nasi Goreng" width=40%></th>
			<th>Nasi Goreng</th>
			<th>1.000.000</th>
			<th><input type= "number" name= "kuantitas_nasiGoreng" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\ayam_geprek.jpg" alt="Ayam Geprek" width=40%></th>
			<th>Ayam Geprek</th>
			<th>1.000.000</th>
			<th><input type= "number" name= "kuantitas_ayamGeprek" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\nasi_kuning.jpg" alt="Nasi Kuning" width=40%></th>
			<th>Nasi Kuning</th>
			<th>1.000.000</th>
			<th><input type= "number" name= "kuantitas_nasiKuning" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\nasi_uduk.jpg" alt="Nasi Uduk" width=40%></th>
			<th>Nasi Uduk</th>
			<th>1.000.000</th>
			<th><input type= "number" name= "kuantitas_nasiUduk" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\nasi_kebuli.jpg" alt="Nasi Kebuli" width=40%></th>
			<th>Nasi Kebuli</th>
			<th>1.000.000</th>
			<th><input type= "number" name= "kuantitas_nasiKebuli" min= "0" value= "0"></input></th>
		</tr>
	</table>

<h4>Minumannya</h4>
	<table border="4">
		<tr>
			<th>Minuman</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Pesan</th>
		</tr>

		<tr>
			<th><img src="assets\images\jus_alpukat.jpg" alt="Jus Alpukat" width=40% height=300px></th>
			<th>Jus Alpukat</th>
			<th>500.000</th>
			<th><input type= "number" name= "kuantitas_jusAlpukat" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\jus_jeruk.jpg" alt="Jus Jeruk" width=40%></th>
			<th>Jus Jeruk</th>
			<th>500.000</th>
			<th><input type= "number" name= "kuantitas_jusJeruk" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\lemon_tea.jpe" alt="Lemon Tea" width=40%></th>
			<th>Lemon Tea</th>
			<th>500.000</th>
			<th><input type= "number" name= "kuantitas_lemonTea" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\es_teh_manis.jpg" alt="Es Teh Manis" width=40%></th>
			<th>Es Teh Manis</th>
			<th>500.000</th>
			<th><input type= "number" name= "kuantitas_esTehManis" min= "0" value= "0"></input></th>
		</tr>

		<tr>
			<th><img src="assets\images\thai_tea.jpg" alt="Thai Tea" width=40%></th>
			<th>Thai Tea</th>
			<th>500.000</th>
			<th><input type= "number" name= "kuantitas_thaiTea" min= "0" value= "0"></input></th>
		</tr>
	</table>

	<input type="submit" name="pesan" value="Pesan">

	<footer>
		<h3><a href="index.php">Logout</a></h3>	 -->
</body>
</html>
