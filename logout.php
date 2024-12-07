<?php
session_start();
session_destroy();
echo '<script>alert("Anda Berhasil Log Out");window.location="login.php"</script>';