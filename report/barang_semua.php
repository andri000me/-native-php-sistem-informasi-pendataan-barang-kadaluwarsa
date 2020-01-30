<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Barang Kadaluwarsa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendataan Barang Kadaluwarsa <br> "Zahra Mart" </h2>
                        <h4>Jalan M.Abbas Semenanjung No. 47B, Sirantau, Datuk Bandar, Tanjungbalai <br> Kabupaten Asahan, Sumatera Utara, 21654</h4>
                        <hr>
                        <h3>SELURUH DATA BARANG KADALUWARSA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%">Kode Barang</th><th>Nama Barang</th><th width="14%"><center>Jenis Barang</th><th>Jumlah Barang</center></th><th width="15%"><center>Tanggal Masuk</center></th><th width="10%">Tanggal Kadaluwarsa</th><th><center>Barcode</center></th><th><center>Supplier</center></th><th>Harga Beli</th><th>Harga Jual</th><th>Harga Member</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_barang";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['kode_barang'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['jenis_barang'] ?></td>
                                    <td><?= $data['jumlah_barang'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['tgl_kadaluwarsa'] ?></td>
                                    <td><?= $data['barcode'] ?></td>
                                    <td><?= $data['supplier'] ?></td>
                                    <td><?= $data['harga_beli'] ?></td>
                                    <td><?= $data['harga_jual'] ?></td>
                                    <td><?= $data['harga_member'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="12" class="text-right">
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