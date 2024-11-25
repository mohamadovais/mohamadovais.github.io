<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('logout');window.location.href='login.php';</script>";
?>