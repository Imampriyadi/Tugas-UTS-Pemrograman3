<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
</head>
<body>
    <h2>Pemograman 1 2023 | TAMPIL MEMBER</h2>
    <br>
    <a href="tambah_member.php">+ Tambah member</a>

    <a href="index.php">HOME</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>id member</th>
            <th>kode member</th>
            <th>Nama member</th>
            <th>Level</th>
            <th>Opsi</th>
            
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"Select * From member");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode_member'];?></td>
            <td><?php echo $d['nama_member'];?></td>
            <td><?php echo $d['level'];?></td>
            <td>
                    <a href="edit_member.php?id=<?php echo $d['id_member']; ?>">Edit</a>
                    <a href="hapus_member.php?id=<?php echo $d['id_member']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
            }
            ?>
    </table>
</body>
</html>