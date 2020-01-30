<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Barang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_barang WHERE kode_barang ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode Barang</td> 
                            <td><?= $data['kode_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
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
                            <td>barcode</td> <td><?= $data['barcode'] ?></td>
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Barang </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

