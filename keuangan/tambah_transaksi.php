<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
</head>
<?php
    //koneksi database
    include 'koneksi.php';
    //menangkap data yang dikirim dari form
    if(!empty($_POST['save'])){
        
        $tanggal = $_POST['tgl_transaksi'];
        $no = $_POST['no_transaksi'];
        $jenis = $_POST['jenis_transaksi'];
        $penjualan = $_POST['penjualan_id'];
        $barang = $_POST['barang_id'];
        $jumlah = $_POST['jumlah_transaksi'];
        $user = $_POST['id_member'];
        $total = $_POST['total'];
        //menginput data ke database
        $a = mysqli_query($koneksi,"insert into transaksi values('','$tanggal','$no','$jenis','$penjualan','$barang','$jumlah','$user','$total')");
        if($a){
            //mengalihkan ke halaman kembali
            header("location:tambah_transaksi.php");
        }else{
            echo mysqli_error($koneksi);
        }
    }
?>
<body>
    <h2>Pemograman 1 2023</h2>
    <br>
    <a href="tampil_transaksi.php">Kembali</a>
    <br>
    <h3>TAMBAH DATA TRANSAKSI</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Tanggal Transaksi</td>
                <td><input type="date" name="tgl_transaksi"></td>
            </tr>
            <tr>
                <td>Nomor Transaksi</td>
                <td><input type="number" name="no_transaksi"></td>
            </tr>
            <tr>
                <td>Jenis Transaksi</td>
                <td><input type="text" name="jenis_transaksi"></td>
            </tr>
            <tr>
                <td>Id Barang</td>
                <td><input type="number" name="barang_id"></td>
            </tr>
            <tr>
                <td>Jumlah Transaksi</td>
                <td><input type="number" name="jumlah_transaksi"></td>
            </tr>
            <tr>
                <td>Penjualan_id</td>
                <td><input type="text" name="penjualan_id"></td>
            </tr>
            <tr>
                <td>id member</td>
                <td><input type="number" name="id_member"></td>
            </tr>
            <tr>
                <td>Jumlah Transaksi</td>
                <td><input type="number" name="jumlah_transaksi"></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="number" name="total"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>