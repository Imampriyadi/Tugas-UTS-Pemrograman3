<!DOCTYPE html>
<html>
<head>
    <title>tampil_penjualan</title>
</head>
<body>
    <h2>Pemograman 1 2023 | TAMPIL PENJUALAN</h2>
    <br>
    <a href="tambah_penjualan.php">+ Tambah Penjualan</a>

    <a href="index.php">HOME</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Tanggal Penjualan</th>
            <th>Nama Pelanggan</th>
            <th>Total Harga</th>
            <th>Opsi</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"Select * From penjualan");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['tanggal_penjualan'];?></td>
            <td><?php echo $d['nama_member'];?></td>
            <td><?php echo $d['total_harga'];?></td>
            <td>
                <a href="edit_transaksi.php?id=<?php echo $d['id_penjualan']; ?>">Edit</a>
                <a href="hapus_transaksi.php?id=<?php echo $d['id_penjualan']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
            }
            ?>
    </table>
</body>
</html>