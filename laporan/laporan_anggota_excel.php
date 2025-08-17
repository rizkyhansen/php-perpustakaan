<?php 


    $conn = new mysqli("localhost","root","","db_perpustakaan");

$filename = "anggota_excel-(".date('d-m-Y').").xls";
header("content-disposition: attachment; filename='$filename'");
header("Content-Type: application/vnd.ms-excel");


?>
<h2>Laporan Anggota</h2>
<table border="1">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Program Studi</th>
    </tr>
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
                </tr>
                <?php endforeach;?>
</table>