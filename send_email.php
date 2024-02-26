<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data = json_decode(file_get_contents("php://input"));

  $name = $data->name;
  $email = $data->email;
  $message = $data->message;

  $to = "acarb0040@gmail.com";
  $subject = "KOSBİ FPV Web Sitesinden Yeni Bir Mesajınız Var";
  $body = "Adı: $name\n";
  $body .= "E-posta: $email\n";
  $body .= "Mesaj:\n$message";

  $headers = "From: acarb0040@gmail.com" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
  } else {
    http_response_code(500);
  }
} else {
  http_response_code(405);
}
?>
