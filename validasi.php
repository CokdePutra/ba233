<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username=='admin' && $password=='secret') {
  // simpan informasi login di session
  $_SESSION['username'] = $username;
  // pindah ke halaman member
  header('location: member.php');
  exit;
} else {
  // pindah ke halaman login
  header('location: login.php');
  exit;
}