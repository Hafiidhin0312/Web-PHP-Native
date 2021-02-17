<?php
include '../koneksi.php';

$username = $_GET['username'];
$query = "SELECT*FROM user WHERE username = '$username'";
$sql = mysqli_query($koneksi, $query);

$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USER</title>
</head>

<body>
    <form action="simpan_pesan.php" method="post">

        <input type="text" name="username" id="" value=<?php echo $data[0]['username'] ?> readonly>
        <input type="text" name="nama_user" id="" value=<?php echo $data[0]['nama_user'] ?> readonly>
        <input type="submit" value="Pesan">


    </form>
</body>

</html>