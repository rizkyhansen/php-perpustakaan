<?php 

$id = $_GET['id'];
$sql = $conn->query("DELETE FROM tb_buku where id='$id'");

?>

<script type="text/javascript">
                    alert("data berhasil di hapus");
                    window.location.href="?page=buku";
                </script>