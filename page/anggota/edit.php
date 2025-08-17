<?php 

    $id = $_GET['id'];
    $sql = $conn->query("SELECT * FROM tb_anggota WHERE nim= '$id'");
    $anggota = $sql->fetch_assoc();
    $jkl = $anggota['jk'];
?>
<div class="panel panel-success">
    <div class="panel-heading">
            Edit Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="POST">

                                    <div class="form-group">
                                            <label>NIM</label>
                                            <input class="form-control" name="nim" readonly value="<?php echo $anggota['nim'];?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $anggota['nama'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $anggota['tempat_lahir'];?>"/>
                                        </div>
                                    

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $anggota['tgl_lahir'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="l" <?php echo($jkl=='l') ? "checked":" ";?>  checked />Laki - laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="p" <?php echo($jkl=='p') ? "checked" : " ";?>/>Wanita
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <input class="form-control" name="prodi" value="<?php echo $anggota['prodi'];?>"/>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" value="simpan" name="simpan">Edit</button>
                                        </div>

                                        <div class="form-group">
                                            <a href="?page=anggota" class="btn btn-info">Kembali</a>
                                        </div>
                                    </form>

                                        
                </div>
                </div>
                </div>

<?php

    $nim = $_POST['nim'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $tempat_lahir = $_POST['tempat_lahir'] ?? '';
    $tgl_lahir = $_POST['tgl_lahir'] ?? '';
    $jk = $_POST['jk'] ?? '';
    $prodi = $_POST['prodi'] ?? '';
    $simpan = $_POST['simpan'] ?? '';

    if($simpan){
        
        $sql = $conn->query("UPDATE tb_anggota SET nama='$nama',tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi' WHERE nim='$nim'");

        if($sql){
            ?> <script type="text/javascript">
                    alert("data berhasil di edit");
                    window.location.href="?page=anggota";
                </script>
            <?php
        }
    }
?>