<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
</head>
<body>
    <h2>Pemograman 1 2023 | TAMPIL TRANSAKSI</h2>
    <br>
    <a href="tambah_transaksi.php">+ Tambah Transaksi</a>

    <a href="index.php">HOME</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>TANGGAL TRANSAKSI</th>
            <th>NO TRANSAKSI</th>
            <th>JENIS TRANSAKSI</th>
            <th>PENJUALAN ID</th>
            <th>ID BARANG</th>
            <th>JUMLAH TRANSAKSI</th>
            <th>ID MEMBER</th>
            <th>TOTAL</th>
            <th>OPSI</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"Select * From transaksi");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['tgl_transaksi'];?></td>
            <td><?php echo $d['no_transaksi'];?></td>
            <td><?php echo $d['jenis_transaksi'];?></td>
            <td><?php echo $d['penjualan_id'];?></td>
            <td><?php echo $d['barang_id'];?></td>
            <td><?php echo $d['jumlah_transaksi'];?></td>
            <td><?php echo $d['id_member'];?></td>
            <td><?php echo $d['total'];?></td>
            <td>
                <a href="edit_transaksi.php?id=<?php echo $d['id_transaksi']; ?>">Edit</a>
                <a href="hapus_transaksi.php?id=<?php echo $d['id_transaksi']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
            }
            ?>
    </table>
</body>
</html>