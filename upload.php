<?php
require_once 'function.php';
cek_session();

chdir('storage');

$berkas = $_FILES['berkas'];

move_uploaded_file($berkas['tmp_name'], $berkas['name']);

header('location: download.php');
exit;