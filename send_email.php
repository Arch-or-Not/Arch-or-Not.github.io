<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "acarb0040@gmail.com";
  $subject = "İletişim Formundan Yeni Mesaj";
  $body = "Ad: $name\nE-posta: $email\n\nMesaj:\n$message";

  if (mail($to, $subject, $body)) {
    http_response_code(200);
    echo "E-posta başarıyla gönderildi.";
  } else {
    http_response_code(500);
    echo "E-posta gönderme hatası.";
  }
} else {
  http_response_code(405);
  echo "Hatalı istek.";
}
?>
