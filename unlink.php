<?php
chdir('storage');

if(isset($_GET['f'])) {
  // ambil file
  $file = $_GET['f'];
  unlink($file);
}

header('location: download.php');
exit;