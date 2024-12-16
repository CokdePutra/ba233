<!DOCTYPE html>
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
      <form action="" method="post">
        <label for="input-file">File</label>
        <input type="file" name="berkas" id="input-file">
        <button type="submit">Upload</button>
      </form>
    </section>
    <hr>
    <section>
      <h2>Download</h2>
      <ul class="file-list">
        <li>
          <a href="#" class="file-name">nama-file-001.ext</a>
          <span class="file-size">1.2mb</span>
          <a href="#" class="file-delete">[x]</a>
        </li>
        <li>
          <a href="#" class="file-name">nama-file-002.ext</a>
          <span class="file-size">456kb</span>
          <a href="#" class="file-delete">[x]</a>
        </li>
        <li>
          <a href="#" class="file-name" title="nama file yang panjang">Lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-Obcaecati-recusandae-ratione-nihil-aliquam-harum-pariatur-excepturi-repellendus-magni-veniam-praesentium.ext</a>
          <span class="file-size">789byte</span>
          <a href="#" class="file-delete">[x]</a>
        </li>
        <li>
          <a href="#" class="file-name">nama-file-003.ext</a>
          <span class="file-size">789byte</span>
          <a href="#" class="file-delete">[x]</a>
        </li>
      </ul>
    </section>
  </main>
</body>
</html>