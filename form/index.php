<?php 
require_once('header.php');
?>
<body>
<div class="container">
  <h1 class="contact-title">お問い合わせ</h1>
  <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
    <div class="form__item-container">
      <div class="form__item">
        <label class="form__item-name">件名<span class="required">※必須</span></label>
        <select name="type" required>
          <option value="">件名を選択してください</option>
          <option value="ご意見">ご意見</option>
          <option value="ご感想">ご感想</option>
          <option value="その他">その他</option>
        </select>
      </div>
      <div class="form__item">
          <label class="form__item-name">名前<span class="required">※必須</span></label>
          <input type="text" name="name" placeholder="例）山田太郎" value="" required>
      </div>
      <div class="form__item">
          <label class="form__item-name">メールアドレス<span class="required">※必須</span></label>
          <input type="text" name="email" placeholder="例）guest@example.com" value="" required>
      </div>
      <div class="form__item">
          <label class="form__item-name">電話番号<span class="required">※必須</span></label>
          <input type="text" name="tel" placeholder="例）0000000000" value="" required>
      </div>
      <div class="form__item">
          <label class="form__item-name">お問い合わせ内容<span class="required">※必須</span></label>
          <textarea name="content" rows="5" placeholder="お問合せ内容を入力" required></textarea>
      </div>
    </div>
    <input class="form__btn" type="submit" value="送信">
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="style.js"></script>
</body>
</html>