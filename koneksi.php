<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'web');

if (!$koneksi) {
    echo "tidak ada koneksi";
}
