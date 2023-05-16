<?php
include('functions.php');
unset($_SESSION['adminId']);
header('Location: index.php');
exit();