<?php
include("config.php");
$id = $_GET['id'];

$orders_query = pg_query("SELECT * FROM pesanan WHERE id_users = '$id'");

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
                <th>Kuantitas</th>
                <th>Alamat Tujuan</th>
                <th colspan ="2">Edit</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while($pesanan = pg_fetch_array($orders_query))
                {
                    // $users_query = pg_query("SELECT * FROM users WHERE id = '$pesanan['id_users']'");
                    // $users = pg_fetch_array($users_query);
                    $foods_query = pg_query("SELECT * FROM makanan WHERE id = '$pesanan[id_makanan]'");
                    $makanan = pg_fetch_array($foods_query);

                    echo "<tr>";

                    echo "<td>".$makanan['nama']."</td>";
                    echo "<td>".$makanan['harga']."</td>";
                    echo "<td>".$pesanan['kuantitas']."</td>";
                    echo "<td>".$pesanan['alamat_tujuan']."</td>";
            ?>
                    <form action= "<?php echo "lamanedit.php?id_user=".$id."&id_makanan=".$makanan['id']."&id_pesanan=".$pesanan['id']?>" method="POST">
                        <td>
                            <input type="submit" value="Edit" name="edit"/>
                        </td>
                    </form>

                    <form action= "<?php echo "proseshapus.php?id_user=".$id."&id_makanan=".$makanan['id']."&id_pesanan=".$pesanan['id']?>" method="POST">
                        <td>
                            <input type="submit" value="Hapus" name="hapus" />
                        </td>
                    </form>
            <?php
                    echo "</tr>";
                }
            ?>

        </tbody>
	</table>
    <br>
    <div>
        <a href=" <?php echo "halamanutama.php?id=".$id ?>">Kembali</a>
    </div>
</body>
</html>