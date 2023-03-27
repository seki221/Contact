<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-widthz, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('/css/riset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/manage.css')}}">
  
  <title>COACHTECH</title>

</head>

<body>
  <main>
  <div class="title mb-15">
    <div class="card">

      <p class="title mb-15">管理システム</p>
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <div class="container">
        <form action="/Management/find" method="post" class="flex between mb-30">
          @csrf
          <table>
            <tr>
              <th>
                お名前
              </th>
              <td><input type="text" class="manage_form" name="content"></td>
              <td>
                <label for="gender_male" class="male">
                  <input id="gender_male" type="radio" name="gender" value="male" checked="checked" class="male" style="transform:scale(1.5);">
                  男性
                </label>
                <label for="gender_female" class="female">
                  <input id="gender_female" type="radio" name="gender" value="female" class="female" style="transform:scale(1.5);">女性
                  <sp class="under_name">
                    <label for="gender_male" class="male">
                      <input id="gender_male" type="radio" name="gender" value="male" class="male" style="transform:scale(1.5);">
                      男性
                    </label>
              </td>
            </tr><br>
            <tr>
              <th>登録日</th>
              <td><input type="text" class="manage_form" name="content" /></td>ー
              <td><input type="text" class="manage_form" name="content" /></td><br>
            </tr>
            <tr>
              <th>メールアドレス</th>
              <td><input type="text" class="manage_form" name="content" /></td>
            </tr>

          </table>

          <input class="button-add" type="submit" value="検索" />
        </form>
        <table>
          <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
          </tr>
          @include('Management/lists')
        </table>
      </div>
    </div>
  </div>
</body>

</html>