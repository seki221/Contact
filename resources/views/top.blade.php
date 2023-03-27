<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/contact.css')}}">
  <title>Document</title>
</head>

<body>
  <h1>お問い合わせ</h1><br>
  <!-- <p>{{$txt}}</p> -->
  @if (count($errors) > 0)
  <p>入力に問題があります</p>
  @endif
  <form method="POST" action="{{ route('confirm') }}" class="h-adr conteiner" ;>
    @csrf
    <div class="conteiner">
      <div class="form-cont">
        <table>
          <!-- 名前 -->
          <div class="fullname">
            <tr class="fullname">
              <th class="lavel_th"><label for="fullname" class="※">お名前</label></th>
              <td class="name">
                <input type="text" id="firstname" name="firstname" value="{{ old('email') }}" class="namehuge"><br>
                <sp class="under_name">
                  <exmp class="under_form">例)山田</exmp>
                </sp><br>
                <sp class="error">@error('firstname')
                  {{$message}}
                  @enderror
                </sp>
              </td>
              <td>
                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" class="namehuge"><br>
                <sp class="under_name">
                  <exmp class="under_form">例)太郎</exmp>
                </sp><br>
                <sp class="error">@error('lastname')
                  {{$message}}
                  @enderror
                </sp>
              </td>
            </tr>
          </div>
          <!-- 性別 -->
          <div class="element_wrap">
            <tr>
              <th class="lavel_th">
                <label class="※">性別</label>
              </th>
              <td>
                <label for="gender_male" class="male">
                  <input id="gender_male" type="radio" name="gender" value="male" checked="checked" class="male" style="transform:scale(1.5);">
                  男性
                </label>
                <label for="gender_female" class="female">
                  <input id="gender_female" type="radio" name="gender" value="female" class="female" style="transform:scale(1.5);">女性<br>
                  <sp class="under_name">
                    @error('gender')
                    {{$message}}
                    @enderror
                  </sp>
                </label>
              </td>
          </div>

          <!-- メールアドレス -->
          <div class="mg-b_40">
            <tr>
              <th class="lavel_th">
                <label for="email" class="※">メールアドレス</label>
              </th>
              <td>
                <input type="email" id="mail" name="email" value="{{ old('email') }}" class="huge"><br>
                <exmp class="under_form">例)test@example.com</exmp><br>
                <sp class="under_name">
                  @error('email')
                  {{$message}}
                  @enderror
                </sp>
              </td>
            </tr>
          </div>
          <!-- 郵便番号 -->
          <div class="mg-b_40">
            <tr>
              <th class="lavel_th">
                <label for="postal_code" class="※">郵便番号</label>
              </th>
              <td class=" postal_code">
                〒<input type="text" name="zip11" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" size="60" value="{{ old('postcode') }}" class="posthuge p-postal-code posthuge"><br>
                <exmp class="under_form">例)123-4567</exmp>
                @if($errors->has('postcode'))
                <p class="required">{{ $errors->first('postcode') }}</p>
                @endif
              </td>
            </tr>
          </div>
          <!-- 住所 -->
          <div class="mg-b_40">
            <tr>
              <th class="lavel_th">
                <label for="address" class="※">住所</label>
              </th>
              <td>
                <input type="text" id="address" name="address" value="{{ old('address') }}" class="huge p-region p-locality p-street-address">
                <br>
                <exmp class="under_form">例)東京都渋谷区千駄ヶ谷1-2-3</exmp>
                <sp class="error">
                  @if($errors->has('address'))
                  <p class=" required">{{ $errors->first('address') }}</p>
                  @endif
                </sp>
              </td>
            </tr>
          </div>
          <!-- 建物名 -->
          <div class="mg-b_40">
            <tr>
              <th class="lavel_th">
                <span class="p-country-name" style="display:none;">Japan</span>
                <label for="building_name">建物名</label><br>
              </th>
              <td>
                <input type="text" id="building_name" name="building_name" value="{{ old('building_name') }}" class="huge "><br>
                <exmp class="under_form">例)千駄ヶ谷マンション101</exmp>
                @if($errors->has('building_name'))
                <p class="required">{{ $errors->first('building_name') }}</p>
                @endif
              </td>
            </tr>
          </div>
          <!-- ご意見 -->
          <div class="mg-b_40">
            <tr>
              <th class="lavel_th">
                <label for="opinion" class="※">ご意見</label>
              </th>
              <td>
                <textarea name="opinion" id="opinion" cols="72" rows="4" class="opinion">{{ old('opinion') }}</textarea>
                @if($errors->has('opinion'))
                <p class="required">{{ $errors->first('opinion') }}</p>
                @endif
              </td>
            </tr>
          </div>
        </table>
        <button type="submit" name="action" value="submit">確認</button>
      </div>
    </div>
  </form>

</body>

</html>