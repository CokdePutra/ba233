<?php
// pindah direktory
chdir('storage');

// baca isi direktory
$files = scandir(getcwd());

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOS : Simple Online Storage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Simple Online Storage</h1>
  </header>
  <main>
    <section>
      <h2>Upload</h2>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="input-file">File</label>
        <input type="file" name="berkas" id="input-file">
        <button type="submit">Upload</button>
      </form>
    </section>
    <hr>
    <section>
      <h2>Download</h2>
      <ul class="file-list">
<?php
foreach ($files as $file) {
  if(is_file($file) && substr($file, 0, 1)!='.') {
    $size = filesize($file); // dalam bytes
    if($size >= (1024*1024)) { // Megabytes
      $size = round($size/(1024*1024), 1) . ' mb';
    } elseif($size >= 1024) {  // kilobytes 
      $size = round($size/1024, 1) . ' kb';
    } else {
      $size = $size . ' bytes';
    }
    echo '<li>';
    echo '<a href="storage/' . $file . '" class="file-name" title="' . $file . '">' . $file . '</a>';
    echo '<span class="file-size">' . $size . '</span>';
    echo '<a href="unlink.php?f=' . $file . '" class="file-delete" onclick="return konfirmasi()">[x]</a>';
    echo '</li>';
  }
}
?>
      </ul>
    </section>
  </main>
  <script>
    function konfirmasi() {
      return confirm('Apakah anda yakin ingin menghapus file ini?');
    }
  </script>
</body>
</html>