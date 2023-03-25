<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['text'])) {
    $isset_status = 'POSTED, isset() True';
    $text_value = $_POST['text'];
  } else {
    $isset_status = 'POSTED, isset() False';
    $text_value = 'Undefined or Null';
  }
} else {
  $isset_status = 'started without POST';
  $text_value = 'Undefined';
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('/css/riset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/confirm.css')}}">
  <title>Document</title>
</head>

<body>

  <form method="POST" action="{{ route('send') }}" class="confirm__ar">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <dl>
      <dt class="confirm__tag">お名前</dt>
      <dd>{{ $contacts['firstname'] }}{{ $contacts['lastname'] }}
      </dd>
      <input type="hidden" name="fullname" value="{{ $contacts['firstname'] }}">
      <input type="hidden" name="fullname" value="{{ $contacts['lastname'] }}">

    </dl>
    <dl>
      <dt class="confirm__tag">性別</dt>
      <dd>{{ $contacts['gender'] }}</dd>
      <input type="hidden" name="gender" value="{{ $contacts['gender'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">メールアドレス</dt>
      <dd>{{ $contacts['email'] }}</dd>
      <input type="hidden" name="email" value="{{ $contacts['email'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">郵便番号</dt>
      <dd>{{ $contacts['postal_code'] }}</dd>
      <input type="hidden" name="postcode" value="{{ $contacts['postal_code'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">住所</dt>
      <dd>{{ $contacts['address'] }}</dd>
      <input type="hidden" name="address" value="{{ $contacts['address'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">建物名</dt>
      <dd>{{ $contacts['building_name'] }}</dd>
      <input type="hidden" name="building_name" value="{{ $contacts['building_name'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">ご意見</dt>
      <dd>
        {!! nl2br(e($contacts['opinion'])) !!}
        <input type="hidden" name="opinion" value="{{ $contacts['opinion'] }}">
      </dd>
    </dl>
    <div class="confirm_bk">
      <div class="e_a_b">
        <p><button onclick="submit();" name="action" value="submit">送信</button></p>
        <p><a href="{{ route('index') }}" class="back_btn"><span class="f-bold">修正する</span></a></p>
      </div>
    </div>
  </form>
</body>

</html>