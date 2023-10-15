<?php
session_start();
session_destroy();
//echo "<script>alert('logout successfully')

header('Location:index.php');
?>

