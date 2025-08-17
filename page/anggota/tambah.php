
<div class="panel panel-primary">
<div class="panel-heading">
                            Tambah Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input class="form-control" type="number" name="nim"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" id="jk1" value="l" checked />Laki - laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" id="jk2" value="p"/>Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Program Studi </label>
                                            <input class="form-control" name="prodi"/>
                                        </div>                                        

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
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
        $sql = $conn->query
        ("INSERT INTO tb_anggota (nim, nama, tempat_lahir, tgl_lahir, jk, prodi) VALUES 
        ('$nim', '$nama', '$tempat_lahir', '$tgl_lahir', '$jk', '$prodi')");

        if($sql){
            ?> <script type="text/javascript">
                    alert("data anggota berhasil disimpan");
                    window.location.href="?page=anggota";
                </script>
            <?php
        }
    }
?>