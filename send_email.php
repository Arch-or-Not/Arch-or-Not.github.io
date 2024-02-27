<?php

// POST isteğini kontrol et
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Form verilerini al
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // E-posta bilgileri
  $to = "acarb0040@gmail.com";
  $subject = "İletişim Formundan Yeni Mesaj";
  $body = "Ad: $name\nE-posta: $email\n\nMesaj:\n$message";

  // E-posta gönderme
  if (mail($to, $subject, $body)) {
    http_response_code(200); // Başarılı durum kodu
  } else {
    http_response_code(500); // Hata durum kodu
  }
} else {
  http_response_code(405); // Method Not Allowed durum kodu
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
