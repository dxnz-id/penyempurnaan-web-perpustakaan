<?php
$baseURL = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);

if ($_SESSION['ket'] != 'admin') {
  echo "<script>window.location.href = '" . $baseURL . "'</script>";
}