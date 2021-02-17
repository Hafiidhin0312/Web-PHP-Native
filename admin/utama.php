<?php include '../koneksi.php';

$query = "SELECT id_terteras,authorized,divisi,lokasi,tanggal,waktu FROM biodata INNER JOIN pesan
ON biodata.id_terteras = pesan.id_tertera ORDER BY tanggal,waktu DESC";

$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: 2px solid black;
            border-collapse: collapse;

        }

        td {
            padding: 15px;
        }
    </style>
</head>

<body>
    <div align="center">
        <h1>DAFTAR PESANAN</h1>
        <table>

            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Divisi</td>
                <td>Lokasi</td>
                <td>Tanggal</td>
                <td>Waktu</td>

            </tr>

            <?php $no = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>

                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_terteras'] ?></td>
                    <td><?php echo $d['authorized'] ?></td>
                    <td><?php echo $d['divisi'] ?></td>
                    <td><?php echo $d['lokasi'] ?></td>
                    <td><?php echo $d['tanggal'] ?></td>
                    <td><?php echo $d['waktu'] ?></td>

                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>