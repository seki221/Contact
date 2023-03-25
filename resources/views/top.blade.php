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
          <div class="fullname">
            <tr>
              <th>
                <label for="fullname" class="※">お名前</label>
              </th>
              <td class="name">
                
                <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" class="namehuge" >
                @if($errors->has('firstname'))
                <p class="required">{{ $errors->first('firstname') }}</p>
                @endif
                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" class="namehuge">
                @if($errors->has('lastname'))
                <p class="required">{{ $errors->first('lastname') }}</p>
                @endif
              </td>
            </tr>
          </div>
          <div class="element_wrap">
            <th>
              <label class="※">性別</label>
            </th>
            <td>
              <label for="gender_male" class="male">
                <input id="gender_male" type="radio" name="gender" value="male" checked="checked" class="male" style="transform:scale(1.5);">
                男性
              </label>
              <label for="gender_female" class="female">
                <input id="gender_female" type="radio" name="gender" value="female" class="female" style="transform:scale(1.5);">女性
              </label>
            </td>
          </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th>
                <label for="email" class="※">メールアドレス</label>
              </th>
              <td>
                <input type="email" id="mail" name="email" value="{{ old('email') }}" class="size-input-email">
                @if($errors->has('email'))
                <p class="required">{{ $errors->first('email') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th>
                <label for="postcode" class="※">郵便番号</label>
              </th>
              <td class=" postcode">
                〒<input type="text" id="postcode" name="postcode" value="{{ old('postcode') }}" pattern="\d{3}-?\d{4}">
                @if($errors->has('postcode'))
                <p class="required">{{ $errors->first('postcode') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th class="※">
                <label for="address">住所</label>
              </th>
              <td>
                <input type="text" id="address" name="address" value="{{ old('address') }}" class="huge">
                @if($errors->has('address'))
                <p class="required">{{ $errors->first('address') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th>
                <label for="building_name">建物名</label>
              </th>
              <td>
                <input type="text" id="building_name" name="building_name" value="{{ old('building_name') }}" class="huge">
                @if($errors->has('building_name'))
                <p class="required">{{ $errors->first('building_name') }}</p>
                @endif
              </td>
            </div>
          </tr>
          <tr>
            <div class="mg-b_40">
              <th>
                <label for="opinion" class="※">ご意見</label>
              </th>
              <td>
                <textarea name="opinion" id="opinion" cols="72" rows="4">{{ old('opinion') }}</textarea>
                @if($errors->has('opinion'))
                <p class="required">{{ $errors->first('opinion') }}</p>
                @endif
              </td>
            </div>
          </tr>
        </table>
        <button type="submit" name="action" value="submit">確認</button>
      </div>
    </div>
  </form>
</body>

</html>