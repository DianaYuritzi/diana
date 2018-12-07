<?php

if(isset($_SESSION['USUARIO']))
unset($_SESSION['USUARIO']);
if(isset($_SESSION['ID']))
unset($_SESSION['ID']);
if(isset($_SESSION['ROL']))
unset($_SESSION['ROL']);

session_destroy();
echo "<script> document.location.href='inicio.php?op=index'</script>";
exit;
?>
