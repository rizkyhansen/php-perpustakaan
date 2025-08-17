<?php 

$koneksi = new mysqli("localhost","root","","db_perpustakaan");
    $content = '
        <style type="text/css">
            .tabel{border-collapse: collapse;}
            .tabel th{padding: 8px 5px; background-color: #cccccc;}
        </style>
    ';
    $content .= '
    <page>
        <h2>Laporan data anggota</h2>
        <table border="1" class="tabel">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Program Studi</th>
            </tr>';

            $sql = $koneksi->query("SELECT * FROM tb_anggota");
                $members = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                $no = 1;
            
                
                foreach ($members as $member) {
                $jk = ($member['jk'] == 'l') ? "Laki - Laki" : "Wanita";
                $content .= '
                <tr>
                    <td>'. $no++ .'</td>
                    <td>'. $member['nama'].'</td>
                    <td>'. $member['nim'].'</td>
                    <td>'. $member['tempat_lahir'] .'</td>
                    <td>'. $member['tgl_lahir'].'</td>
                    <td>'. $jk.'</td>
                    <td>'. $member['prodi'].'</td>
                </tr>
            
            ';
            }
            
            $content .='
        </table>
        
    </page>';
    

    require __DIR__.'/../vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML($content);
    $html2pdf->output();


?>
