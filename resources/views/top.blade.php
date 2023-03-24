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
  <form method="POST" action="{{ route('confirm') }}">
    @csrf
    @method('POST')
    <div class="form-inner">
      <div class="form-cont">
        <table>
          <tr>
            <div class="fullname">
              <th class="※">
                <label for="fullname">お名前</label>
              </th>
              <td>
                <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" class="namehuge">
                @if($errors->has('firstname'))
                <p class="required">{{ $errors->first('firstname') }}</p>
                @endif
              </td>
              <td>
                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" class="nemehuge">
                @if($errors->has('lastname'))
                <p class="required">{{ $errors->first('lastname') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <div class="element_wrap">
            <th class="※">
              <label>性別</label>
            </th>
            <td>
              <label for="gender_male">
                <m><input id="gender_male" type="radio" name="gender" value="male" checked="checked" class="male" style="transform:scale(1.5);">男性
              </label>
              <label for="gender_female">
                <input id="gender_female" type="radio" name="gender" value="female" class="female" style="transform:scale(1.5);">女性
              </label>
            </td>
          </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th class="※">
                <label for="email" class="required-tag lg-label">メールアドレス</label>
              </th>
              <td>
                <input type="email" id="mail" name="email" class="mg-b_10" value="{{ old('email') }}">
                @if($errors->has('email'))
                <p class="required">{{ $errors->first('email') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th class="required">
                <label for="postcode">郵便番号</label>
              </th>
              <td>
                <q><input type="text" id="postcode" name="postcode" value="{{ old('postcode') }}" pattern="\d{3}-?\d{4}" class="huge"></q>
                @if($errors->has('postcode'))
                <p class="required">{{ $errors->first('postcode') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th class="※">
                <label for="postcode">住所</label>
              </th>
              <td>
                <input type="text" id="postcode" name="postcode" value="{{ old('postcode') }}">
                @if($errors->has('postcode'))
                <p class="required">{{ $errors->first('postcode') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th>
                <label for="buildname">建物名</label>
              </th>
              <td>
                <input type="text" id="buildname" name="buildname" value="{{ old('buildname') }}">
                @if($errors->has('postcode'))
                <p class="required">{{ $errors->first('buildname') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th class="※">
                <label for="content" class="lg-label">ご意見</label>
              </th>
              <td>
                <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
              </td>
            </div>
          </tr>
        </table>
        <button type="submit" name="action" value="submit">確認</button>


      </div>
    </div>
</body>

</html>