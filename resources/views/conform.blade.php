<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form method="POST" action="{{ route('send') }}" class="confirm__ar">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <dt class="confirm__tag">お名前</dt>
    <dd>{{ $inputs['firstname'] }}
      {{ $inputs['lastname'] }}
    </dd>
    <input type="hidden" name="fullname" value="{{ $inputs['fullname'] }}">
    <input type="hidden" name="fullname" value="{{ $inputs['fullname'] }}">

    </dl>
    <dl>
      <dt class="confirm__tag">性別</dt>
      <dd>{{ $inputs['gender'] }}</dd>
      <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">メールアドレス</dt>
      <dd>{{ $inputs['email'] }}</dd>
      <input type="hidden" name="email" value="{{ $inputs['email'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">郵便番号</dt>
      <dd>{{ $inputs['postal_code'] }}</dd>
      <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">住所</dt>
      <dd>{{ $inputs['address'] }}</dd>
      <input type="hidden" name="address" value="{{ $inputs['address'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">建物名</dt>
      <dd>{{ $inputs['building_name'] }}</dd>
      <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">ご意見</dt>
      <dd>
        {!! nl2br(e($inputs['content'])) !!}
        <input type="hidden" name="content" value="{{ $inputs['content'] }}">
      </dd>
    </dl>
    <div class="confirm_bk">
      <a href="{{ route('index') }}" class="back_btn"><span class="f-bold">戻る</span></a>
      <input onclick="submit();" type="button" value="送信" class="confirm_btn">
      <form method="post" action="">
        修正する</form>
    </div>
  </form>
</body>

</html>