<?php 

    $id = $_GET['id'];
    $sql = $conn->query("SELECT * FROM tb_buku WHERE id= '$id'");
    $tampil = $sql->fetch_assoc();
    $tahunLama = $tampil['tahun_terbit'];
?>
<div class="panel panel-success">
    <div class="panel-heading">
            Edit Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="POST">

                                    <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" readonly value="<?php echo $tampil['id'];?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit">

                                                <?php $tahun = date('Y'); 
                                                
                                                for($i=$tahun; $i >= 1920; $i--){
                                                    
                                                    if($i == $tahunLama){
                                                        echo    '<option value="'. $i .'" selected>'.$i.'</option>';
                                                    }else{
                                                        echo '<option value="'. $i .'">'.$i.'</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil['isbn'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah_buku" value="<?php echo $tampil['jumlah_buku'];?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1" <?php if($tampil['lokasi'] == 'rak1') {
                                                echo "selected"; 
                                                } ?>>Rak 1 </option>
                                                <option value="rak1" <?php if($tampil['lokasi'] == 'rak2') {
                                                echo "selected"; 
                                                } ?>>Rak 2 </option>
                                                <option value="rak1" <?php if($tampil['lokasi'] == 'rak3') {
                                                echo "selected"; 
                                                } ?>>Rak 3 </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" type="date" name="tgl_input" value="<?php echo $tampil['tgl_input'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" value="simpan" name="simpan">Edit</button>
                                        </div>

                                        <div class="form-group">
                                            <a href="?page=buku" class="btn btn-info">Kembali</a>
                                        </div>
                                    </form>

                                        
                </div>
                </div>
                </div>

<?php

    $judul = $_POST['judul'] ?? '';
    $pengarang = $_POST['pengarang'] ?? '';
    $penerbit = $_POST['penerbit'] ?? '';
    $tahun_terbit = $_POST['tahun_terbit'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $jumlah_buku = $_POST['jumlah_buku'] ?? '';
    $lokasi = $_POST['lokasi'] ?? '';
    $tgl_input = $_POST['tgl_input'] ?? '';
    $simpan = $_POST['simpan'] ?? '';

    if($simpan){
        
        $sql = $conn->query("UPDATE tb_buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit',tahun_terbit='$tahun_terbit', isbn='$isbn', jumlah_buku='$jumlah_buku', lokasi='$lokasi',tgl_input='$tgl_input' WHERE id='$id'");

        if($sql){
            ?> <script type="text/javascript">
                    alert("data berhasil di edit");
                    window.location.href="?page=buku";
                </script>
            <?php
        }
    }
?>