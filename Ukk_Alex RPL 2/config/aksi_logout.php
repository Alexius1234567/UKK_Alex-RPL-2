<?php
session_reset();
session_destroy();
echo "<script>
alert('logout berhasil');
location.href='../index.php';
</script>";

?>