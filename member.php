<?php
session_start();

// cek informasi login di session
// tidak ada informasi login, bawa ke halaman login
if(!isset($_SESSION['username'])) {
  $_SESSION['error'] = 'Harap login terlebih dahulu';
  header('location:login.php');
  exit;
}

$username = $_SESSION['username'];

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Area</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      text-align: center;
    }
    main {
      padding: 20px;
    }
    button,
    a.button {
      padding: 5px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
      font-size: large;
      text-decoration: none;
    }
    button:hover,
    a.button:hover {
      background-color: #555;
    }
    section {
      margin: 10px 0;
      padding: 10px 0;
    }
  </style>
</head>
<body>
  <header>
    <h1>Member Area</h1>
  </header>
  <main>
    <section>
      <h2>Selamat Datang, <?= $username ?></h2>
      <p>Lorem ipsum dolor sit amet consectetur.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quidem minus ut assumenda labore impedit? Dolor, maxime quaerat ex quod reiciendis architecto, velit, vero sint reprehenderit ducimus perspiciatis similique delectus itaque quidem dignissimos facilis eveniet. Ratione sed aut nostrum accusantium deserunt totam magni eos obcaecati, blanditiis nemo optio eligendi vel.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam minima non fugiat itaque autem neque incidunt necessitatibus, sapiente, recusandae nobis dolores rem quisquam cupiditate commodi, iure assumenda ut temporibus? Aperiam?</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident id vitae pariatur totam temporibus dolores velit harum? Blanditiis itaque doloremque beatae maxime optio ut, at autem voluptates velit qui voluptatibus animi consequatur, accusantium, enim eaque perferendis soluta laudantium! Hic aperiam ipsa consequuntur unde soluta magnam, laboriosam, deleniti accusantium tenetur officia mollitia fugit iste sunt. Accusantium nisi ad vel deserunt natus veritatis quasi laborum repudiandae ullam est mollitia eos quis impedit eligendi, porro optio odio ut velit ea perferendis quo architecto. Iure voluptates laboriosam omnis molestias quis doloremque maxime cum perferendis!</p>
    </section>
    <section>
      <a href="logout.php" class="button">Logout</a>
    </section>
  </main>
</body>
</html>