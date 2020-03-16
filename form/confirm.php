<?php 
require_once('form.php');
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form action="confirm.php" method="post">
    <input type="hidden" name="type" value="<?php echo $type; ?>">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
    <input type="hidden" name="content" value="<?php echo $content; ?>">
    <h1 class="contact-title">お問い合わせ 内容確認</h1>
    <div class="form__confirm">
      <div class="form__item">
          <label class="form__item-name">お問い合わせ項目</label>
          <p><?php echo $type; ?></p>
      </div>
      <div class="form__item">
          <label class="form__item-name">お名前</label>
          <p><?php echo $name; ?></p>
      </div>
      <div class="form__item">
          <label class="form__item-name">メールアドレス</label>
          <p><?php echo $email; ?></p>
      </div>
      <div class="form__item">
          <label class="form__item-name">電話番号</label>
          <p><?php echo $tel; ?></p>
      </div>
      <div class="form__item">
          <label class="form__item-name">お問い合わせ内容</label>
          <p><?php echo nl2br($content); ?></p>
      </div>
    </div>
      <input class="form__btn" type="button" value="内容を修正する" onclick="history.back(-1)">
      <input class="form__btn" type="submit" name="submit" value="送信">
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="style.js"></script>
</body>
</html>