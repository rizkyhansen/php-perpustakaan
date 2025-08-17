<a href="?page=transaksi&aksi=tambah" class="btn btn-success" style="margin-bottom:5px; font-weight:bold"> <i class="fa fa-plus"></i> Tambah Data Buku</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Tambah Transaksi Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Terlambat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            $sql = $conn->query("SELECT * FROM tb_transaksi where status='pinjam'");
                                            
                                            $transactions = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                                            
                                            
                                            $no = 1;
                                            
                                            ?>
                                            <?php foreach ($transactions as $transaction) :?>
                                                <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $transaction['judul'];?></td>
                                                <td><?= $transaction['nim'];?></td>
                                                <td><?= $transaction['nama'];?></td>
                                                <td><?= $transaction['tgl_pinjam'];?></td>
                                                <td><?= $transaction['tgl_kembali'];?></td>
                                                <td>
                                                    <?php 
                                                
                                                    $denda = 1000;
                                                    $tgl_dateline2 = $transaction['tgl_kembali'];
                                                    // $tgl_kembali = $transaction['tgl_kembali'];
                                                    $tgl_kembali = date('Y-m-d');
                                                    $lambat = terlambat($tgl_dateline2, $tgl_kembali);
                                                    $denda1 = $lambat * $denda;

                                                    if($lambat > 0){
                                                        echo "
                                                        
                                                            <font color= 'red'> $lambat hari <br>(Rp $denda1)</font>
                                                        
                                                        ";
                                                    }else echo $lambat . "Hari";
                                                    ?>
                                            
                                                </td>
                                                <td><?= $transaction['status'];?></td>
                                                <td> <a class="btn btn-info" href="?page=transaksi&aksi=kembali&id=<?php echo $transaction['id']; ?>&judul=<?php echo $transaction['judul']?>">Kembali</a> 
                                                
                                                <a href="?page=transaksi&aksi=perpanjang&id=<?php echo $transaction['id']; ?>&judul=<?php echo $transaction['judul']?>&lambat=<?php echo $lambat?>&tgl_kembali=<?php echo $transaction['tgl_kembali']; ?>"class="btn btn-danger">Perpanjang</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                    </tbody>
                                    
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>