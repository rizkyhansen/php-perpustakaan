<?php 
    $id = $_GET['id'];
    $judul = $_GET['judul'];

    $sql = $conn->query("update tb_transaksi set status='kembali' where id='$id'");

    $sql = $conn->query("update tb_buku set jumlah_buku = (jumlah_buku+1) where judul = '$judul'");

    ?> <script type="text/javascript">
        alert("proses kembalikan buku berhasil");
        window.location.href="?page=transaksi";
    </script>

    <?php




?>