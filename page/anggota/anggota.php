
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Tambah Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Program Studi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            $sql = $conn->query("SELECT * FROM tb_anggota");
                                            
                                            $members = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                                            
                                            
                                            $no = 1;
                                            
                                            ?>
                                            <?php foreach ($members as $member) :?>
                                                <?php $jk = ($member['jk'] == 'l') ? "Laki - Laki" : "Wanita";?>
                                                <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $member['nama'];?></td>
                                                <td><?= $member['nim'];?></td>
                                                <td><?= $member['tempat_lahir'];?></td>
                                                <td><?= $member['tgl_lahir'];?></td>
                                                <td><?= $jk;?></td>
                                                <td><?= $member['prodi'];?></td>
                                                <td> <a class="btn btn-info" href="?page=anggota&aksi=edit&id=<?php echo $member['nim']; ?>">Edit</a> <a onclick="return confirm('anda yakin ingin menghapusnya?')" class="btn btn-danger" href="?page=anggota&aksi=hapus&id=<?php echo $member['nim']; ?>">delete</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                    </tbody>
                                </table>
                                </div>

                                <a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-top:5px; font-weight:bold"> <i class="fa fa-plus"></i> Tambah Data Buku</a>

                                <a href="./laporan/laporan_anggota_excel.php" target="blank" class="btn btn-default" style="margin-top:5px;"> <i class="fa fa-print"></i> ExportToExcel</a>

                                <a href="./laporan/laporan_anggota_pdf.php" target="blank" class="btn btn-default" style="margin-top:5px;"> <i class="fa fa-print"></i> ExportToPDF</a>

                                </div>
                            </div>
                        </div>
                    </div>