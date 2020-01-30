<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode_barang" class="col-sm-3 control-label">Kode Barang</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="kode_barang" class="form-control">
                                    <option value="Minyak dan Sembako">01</option>
                                    <option value="Minuman">02</option>
                                    <option value="Sampo dan Kosmetik">03</option>
                                    <option value="Obat-obatan">04</option>
                                    <option value="Ditergen dan Insektisida">05</option>
                                    <option value="Perlengkapan Rumah Tangga">06</option>
                                    <option value="Permen dan Biskuit">07</option>
                                    <option value="Buah-buahan">08</option>
                                </select>
                            </div>
                        </div>
    
                         <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="<?=$data['nama_barang'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jenis_barang" class="col-sm-3 control-label">Jenis Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_barang" value="<?=$data['jenis_barang'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Barang" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jumlah_barang" class="col-sm-3 control-label">Jumlah Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_barang" value="<?=$data['jumlah_barang'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" value="<?=$data['tgl_masuk'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_kadaluwarsa" class="col-sm-3 control-label">Tanggal Kadaluwarsa</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_kadaluwarsa" value="<?=$data['tgl_kadaluwarsa'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Kadaluwarsa" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="barcode" class="col-sm-3 control-label">Barcode</label>
                            <div class="col-sm-9">
                                <input type="text" name="barcode" value="<?=$data['barcode'] ?>" class="form-control" id="inputPassword3" placeholder="Inputkan Kode Barcode" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="supplier" class="col-sm-3 control-label">Supplier</label>
                            <div class="col-sm-9">
                                <input type="text" name="supplier" value="<?=$data['supplier'] ?>" class="form-control" id="inputPassword3" placeholder="Inputkan Supplier Barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga_beli" class="col-sm-3 control-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_beli" value="<?=$data['harga_beli'] ?>" class="form-control" id="inputPassword3" placeholder="Inputkan Harga Beli Barang" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="harga_jual" class="col-sm-3 control-label">Harga Jual</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_jual" value="<?=$data['harga_jual'] ?>" class="form-control" id="inputPassword3" placeholder="Inputkan Harga Jual Barang" required>
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="harga_member" class="col-sm-3 control-label">Harga Member</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_member" value="<?=$data['harga_member'] ?>" class="form-control" id="inputPassword3" placeholder="Inputkan Harga Member" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Update Data Barang</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
     $kode_barang=$_POST['kode_barang'];
    $nama_barang=$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $jumlah_barang=$_POST['jumlah_barang'];
  $tgl_masuk=$_POST['tgl_masuk'];
    $tgl_kadaluwarsa=$_POST['tgl_kadaluwarsa'];
  $barcode=$_POST['barcode'];
  $supplier=$_POST['supplier'];
    $harga_beli=$_POST['harga_beli'];
  $harga_jual=$_POST['harga_jual'];
    $harga_member=$_POST['harga_member'];

    $sql="UPDATE tbl_barang SET kode_barang='$kode_barang',nama_barang='$nama_barang',jenis_barang='$jenis_barang',jumlah_barang='$jumlah_barang',tgl_masuk='$tgl_masuk',
	tgl_kadaluwarsa='$tgl_kadaluwarsa',barcode='$barcode',supplier='$supplier',harga_beli='$harga_beli',harga_jual='$harga_jual',harga_member='$harga_member' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");

    if ($query){
        echo "<script>window.location.assign('?page=barang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
 
}
?>



