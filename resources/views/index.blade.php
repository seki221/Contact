<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/contact.css')}}">
  <title>Document</title>
</head>

<body>
  <h1>お問い合わせ</h1><br>
  <form action="/form.php" method="post">
    <div class="formtag">
      <div class="label">
        <th><label for="name">お名前<span class="asterisk">※</span></label></th>
        <td><input type="text" id="name" name="firstname" required></td>
        <td><input type="text" id="name" name="lastname" required></td>
      </div>
      <div class="label">
        <th></th><label for="gender">性別<span class="asterisk">※</span></label>
        <td><input type="radio" name="gender" value="男" checked="checked"> 男性</td>
        <td><input type="radio" name="gender" value="女"> 女性</td>

      </div>
      <div class="label">
        <th><label for="email">メールアドレス<span class="asterisk">※</span></label></th>
        <td><input type="name" id="email" name="email" required></td>
      </div>
      <div class="label">
        <label for="postcode">郵便番号<span class="asterisk">※</span></label>
        〒<input type="text" name="postcode" pattern="\d{3}-?\d{4}" required>
      </div>
      <div class="label">
        <label for="address">住所<span class="asterisk">※</span></label>
        <input type="text" id="address" name="address">
      </div>
      <div class="label">
        <label for="email">メールアドレス<span class="asterisk">※</span></label>
        <input type="name" id="email" name="email">
      </div>
      <div class="label">
        <th><label for="message">ご意見</label></th>
        <td><textarea required></textarea></td>
      </div>
      <button type="submit" name="action" value="submit">確認</button>
    </div>






    <td></td>
    <th></th>
    <td></td>
    <th></th>
    <td></td>
    <th></th>
    <td></td>
    <th></th>
    <td></td>
    <th></th>
    <td></td>
  </form>
</body>

</html>
<!-- <div class="formtag">
  <div class="label">
    <label for="name">お名前<span class="asterisk">※</span></label>
    <input type="text" id="name" name="firstname" required>
    <input type="text" id="name" name="lastname" required>
  </div>
  <div class="label">
    <label for="性別">性別<span class="asterisk">※</span></label>
    <input type="radio" name="性別" value="男" checked="checked"> 男性
    <input type="radio" name="性別" value="女"> 女性
  </div>
  <div class="label">
    <label for="email">メールアドレス<span class="asterisk">※</span></label>
    <input type="name" id="email" name="email" required>
  </div>
  <div class="label">
    <label for="postcode">郵便番号<span class="asterisk">※</span></label>
    〒<input type="text" name="postcode" pattern="\d{3}-?\d{4}" required>
  </div>
  <div class="label">
    <label for="">住所<span class="asterisk">※</span></label>
    <input type="text" id="adress" name="adress">
  </div>
  <div class="label">
    <label for="email">メールアドレス<span class="asterisk">※</span></label>
    <input type="name" id="email" name="email">
  </div>
  <div class="label">
    <th><label for="message">ご意見</label></th>
    <td><textarea required></textarea></td>
  </div> -->