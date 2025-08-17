
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Tambah Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Jumlah Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            $sql = $conn->query("SELECT * FROM tb_buku");
                                            
                                            $books = mysqli_fetch_all($sql, MYSQLI_ASSOC);

                                            $no = 1;
                                           
                                        ?>
                                            <?php foreach ($books as $book) :?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $book['judul'];?></td>
                                                <td><?= $book['pengarang'];?></td>
                                                <td><?= $book['penerbit'];?></td>
                                                <td><?= $book['isbn'];?></td>
                                                <td><?= $book['jumlah_buku'];?></td>
                                                <td> <a class="btn btn-info" href="?page=buku&aksi=edit&id=<?php echo $book['id']; ?>">Edit</a> <a onclick="return confirm('anda yakin ingin menghapusnya?')" class="btn btn-danger" href="?page=buku&aksi=hapus&id=<?php echo $book['id']; ?>">delete</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                    </tbody>
                                </table>
                                
                                </div>
                                <a href="?page=buku&aksi=tambah" class="btn btn-success" style="margin-top:5px; font-weight:bold"> <i class="fa fa-plus"></i> Tambah Data Buku</a>
                                <a href="./laporan/laporan_buku_excel.php" class="btn btn-info" style="margin-top:5px;">ExportToExcel</a>
                            </div>
                        </div>
                    </div>