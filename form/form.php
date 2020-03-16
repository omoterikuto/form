<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $type = $_POST["type"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $content  = $_POST["content"];
}

if (isset($_POST["submit"])) {
mb_language("ja");
mb_internal_encoding("UTF-8");

$subject = "株式会社シンプルウェイ　課題　お問い合わせフォーム";

$body = <<< EOM

=================================================
お問い合わせありがとうございます。
件名：{$type}
名前：{$name}
メール：{$email}
電話番号：{$tel}
内容：{$content}

以上の内容でお問い合わせいただきました。
=================================================

EOM;
$body2 = <<< EOM

=================================================
{$name}さんからのお問い合わせがありました。
件名：{$type}
名前：{$name}
メール：{$email}
電話番号：{$tel}
内容：{$content}
=================================================

EOM;

// 管理者メールアドレス
$adminEmail = "omoterikuto@gmail.com";

$fromName = "お問い合わせテスト";
  
$header = "From: " .mb_encode_mimeheader($fromName);
$header2 = "From: " .mb_encode_mimeheader($email);

mb_send_mail($email, $subject, $body, $header);
mb_send_mail($adminEmail, $subject, $body2, $header2);

header("Location:../".basename(__DIR__)."/completion.php");
exit;
}