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
    @scrf
    @method('POST')
    <div class="formtag">
      <table>
        <tr>
          <th><label for="name">お名前<span class="asterisk">※</span></label></th>
          <td>
            <input type="text" id="name" name="firstname" class="hugename" required>
            @if($errors->has('firstname'))
            <p class="required">{{ $errors->first('firstname') }}</p>
            @endif
          </td>
          <td><input type="text" id="name" name="lastname" class="hugename" required>
            @if($errors->has('lastname'))
            <p class="required">{{ $errors->first('lastname') }}</p>
            @endif
          </td>
        </tr>
        <tr>
          <div class="element_wrap">
            <label>性別</label>
            <label for="gender_male"><input id="gender_male" type="radio" name="gender" value="male">男性</label>
            <label for="gender_female"><input id="gender_female" type="radio" name="gender" value="female">女性</label>
          </div>
          <th><label for="gender">性別<span class="asterisk">※</span></label></th>
          <td><input type="radio" name="gender" value="男" checked="checked" style="transform:scale(2.0);"><label for="gender">男性</label></td>
          <td><input type="radio" name="gender" value="女"> 女性</td>
        </tr>
        <tr>
          <th><label for="email">メールアドレス<span class="asterisk">※</span></label></th>
          <td class="s"><input type="name" id="email" name="email" required></td>
        </tr>
        <tr>
          <th><label for="postcode">郵便番号<span class="asterisk">※</span></label></th>
          <td class="s"><q><input type="text" name="postcode" pattern="\d{3}-?\d{4}" required></q></td>
        </tr>
        <tr>
          <th><label for="address">住所<span class="asterisk">※</span></label></th>
          <td class="s"><input type="text" id="address" name="address"></td>
        </tr>
        <tr>
          <th><label for="text">建物名</label></th>
          <td class="s"><input type="text" name="building" class="text"></td>
        </tr>
        <tr>
          <th><label for="message">ご意見</label></th>
          <td class="s"><textarea class="textarea" required></textarea></td>
        </tr>
      </table>
    </div>
    <button type="submit" name="action" value="submit">確認</button>
  </form>
  <!-- <form class="contact" action="index.html" method="post">
    <dl>
      <dt>お名前</dt>
      <dd><input type="text" name="name" class="name"></dd>
      <dt>性別</dt>
      <dd><input type="ragio" name="name" class="name"></dd>
      <dt>性別<span class="asterisk">※</span></td>
      <dd><input type="radio" name="gender" value="男" checked="checked"> 男性<input type="radio" name="gender" value="女"> 女性</dd>
      <dt>メールアドレス</dt>
      <dd><input type="email" name="email" class="email"></dd>
      <dt>郵便番号</dt>
      <dd><input type="text" name="postcode" pattern="\d{3}-?\d{4}" required></dd>
      <dt>住所</dt>
      <dd><input type="text" id="address" name="address"></dd>
      <dt>建物名</dt>
      <dd>
        <input type="text" name="building_name" class="text">
      </dd>
      <dt>ご意見</dt>
      <dd><textarea name="message" class="message"></textarea></dd>
    </dl>
    <button type="submit" class="btn">送信</button>

  </form> -->
  <!-- <form class="contact" action="index.html" method="post">
    <div class="flex_box">
      <div class="flex_form-item">
        <div class="box_left">
          <ul>
            <li>お名前<span class="asterisk">※</span></li>
            <li>性別<span class="asterisk">※</span></li>
            <li>メールアドレス<span class="asterisk">※</span></li>
            <li>住所<span class="asterisk">※</span></li>
            <li>郵便番号<span class="asterisk">※</span></li>
            <li>建物名</li>
            <li>ご意見<span class="asterisk">※</span></li>
          </ul>
        </div>
      </div>
      <div class="flex_form-item">
        <div class="box_right">
          <input type="text" id="name" name="firstname" class="hugename" required　>
          <input type="text" id="name" name="lastname" class="hugename" required><br>
          <input type="radio" name="性別" value="男" style="transform:scale(2.0);" checked="checked"> 男性
          <input type="radio" name="性別" value="女"> 女性<br>
          <input type="name" id="email" name="email" class="huge" required>
          <br>
          〒<input type="text" name="postcode" pattern="\d{3}-?\d{4}" class="huge" required><br>
          <input type="text" id="adress" name="adress" class="huge"><br>
          <td><textarea class="huge" required></textarea></td>
        </div>
      </div>
    </div>
  </form> -->
  <button type="submit" class="btn">送信</button>


  
</body>

</html>