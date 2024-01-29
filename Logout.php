<?php
session_start();
header('Location: loginpage.php');
session_destroy();


exit;
?>