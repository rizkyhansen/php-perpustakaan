<?php 

    $tgl_pinjam = date("d-m-Y");
    $tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
    $kembali = date("d-m-Y", $tujuh_hari);

?>

<!-- To do list
Bagian php di date pada transaksi karena masih ada bug -->
<div class="panel panel-primary">
<div class="panel-heading">
                            Tambah Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="POST" onsubmit=" return validasi(this)">

                                        <div class="form-group">
                                            <label>Buku</label>
                                            <select class="form-control" name="buku">

                                            <?php

                                                $sql = $conn->query("SELECT * FROM tb_buku order by id");

                                                while($book = $sql->fetch_assoc()){
                                                    echo "<option value= '$book[id].$book[judul]'>$book[judul]</option>";
                                                }
                                            
                                            ?>

                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <select class="form-control" name="nama" id="nama">

                                            <?php

                                                $sql = $conn->query("SELECT * FROM tb_anggota order by nim");

                                                while($book = $sql->fetch_assoc()){
                                                    echo "<option value= '$book[nim].$book[nama]'>$book[nim].$book[nama]</option>";
                                                }
                                            
                                            ?>

                                            </select>
                                        </div>
                                            

                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tgl_pinjam" readonly value="<?php echo $tgl_pinjam; ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type="text" name="tgl_kembali" readonly value="<?php echo $kembali; ?>"/>
                                        </div>
<!--                                         
                                    
                                        <div class="form-group">
                                            <label>Program Studi </label>
                                            <input class="form-control" name="prodi"/>
                                        </div>                                         -->

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
                                        </div>
                                    </form>
                </div>
                </div>
                </div>

<?php

    if(isset($_POST['simpan'])){
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        
        $buku = $_POST['buku'];
        $pecah_buku = explode(".",$buku);
        $id = $pecah_buku[0];
        $judul = $pecah_buku[1];

        $nama = $_POST['nama'];
        $pecah_nama = explode(".",$nama);
        $nim = $pecah_nama[0];
        $nama = $pecah_nama[1];

        // $buku = $_POST['buku'];
        // $pecah_buku = explode(".",$buku);
        // $nim = $pecah_buku[0];
        // $nama = $pecah_buku[1];

        $sql = $conn->query("SELECT * FROM tb_buku where judul = '$judul'");
        while($data = $sql->fetch_assoc()){
            $sisa = $data['jumlah_buku'];
            if($sisa == 0){
                ?>
                    <script type="text/javascript">
                        alert("stok buku habis, transaksi tidak dapat dilakukan silahkan tambah stok buku terlebih dahulu");
                        window.location.href = "?page=transaksi$aksi=";
                    </script>
                <?php
            }else{
                $sql = $conn->query("insert into tb_transaksi (judul, nim, nama, tgl_pinjam, tgl_kembali,status) VALUES ('$judul','$nim','$nama','$tgl_pinjam','$tgl_kembali','pinjam')");

                $sql2 = $conn->query("update tb_buku set jumlah_buku=(jumlah_buku-1) where id='$id'");

                ?>
                    <script type="text/javascript">
                        alert("simpan data berhasil");
                        window.location.href = "?page=transaksi";
                    </script>
                <?php
            }
        }
    }

?>