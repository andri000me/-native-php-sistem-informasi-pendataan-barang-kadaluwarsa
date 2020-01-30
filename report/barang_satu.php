<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Barang Kadaluwarsa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_barang WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendataan Barang Kadaluwarsa <br> "Zahra Mart" </h2>
                        <h4>Jalan M.Abbas Semenanjung No. 47B, Sirantau, Datuk Bandar, Tanjungbalai <br> Kabupaten Asahan, Sumatera Utara, 21654</h4>
                        <hr>
                        <h3>DATA BARANG KADALUWARSA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Kode Barang</td> <td><?= $data['kode_barang'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Barang</td> <td><?= $data['jenis_barang'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Barang</td> <td><?= $data['jumlah_barang'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Kadaluwarsa</td> <td><?= $data['tgl_kadaluwarsa'] ?></td>
                                </tr>
								<tr>
                                    <td>Barcode</td> <td><?= $data['barcode'] ?></td>
                                </tr>
                                <tr>
                                    <td>Supplier</td> <td><?= $data['supplier'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td> <td><?= $data['harga_beli'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Jual</td> <td><?= $data['harga_jual'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Member</td> <td><?= $data['harga_member'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                       <br> Tanjungbalai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Agus Surianto<strong></u>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>