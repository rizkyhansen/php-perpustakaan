<?php 

$id = $_GET['id'];
$sql = $conn->query("DELETE FROM tb_anggota where nim='$id'");

?>
<script type="text/javascript">
                    alert("data berhasil di hapus");
                    window.location.href="?page=anggota";
                </script>