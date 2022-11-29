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
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th colspan="3">Pesan</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $query = pg_query("SELECT * FROM makanan WHERE id_kategori=2");
                // $query = mysqli_query($db, $sql);

                while($makanan = pg_fetch_array($query))
                {
                    echo "<tr>";

                    echo "<td>".$makanan['nama']."</td>";
                    echo "<td>".$makanan['harga']."</td>";

            ?>

                <form action="<?php echo "prosespesanan.php?id_user=".$users['id']."&id_makanan=".$makanan['id']?>" method="POST">
                        <td>
                            <input type="number" name="kuantitas" value="0" min="1"/>
                        </td>
                        <td>
                            <input type="text" name="alamat_tujuan" placeholder="Alamat Tujuan" required/>
                        </td>
                        <td>
                            <input type="submit" value="Pesan" name="pesan" />
                        </td>
                </form>

            <?php
                    echo "<tr>";
                }
            ?>

        </tbody>
	</table>
    <br>
    <div>
        <a href=" <?php echo "kategori.php?id=".$id ?>">Kembali</a>
    </div>

</body>
</html>