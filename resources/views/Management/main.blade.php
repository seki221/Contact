<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-widthz, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href='/css/reset.css'>
  <link rel="stylesheet" href='/css/manage.css'>

  <title>COACHTECH</title>

  <style>
    .main {
      background-color: #eee;
      /* 背景色指定 */
      height: 330px;
      /* 高さ指定 */
    }

    .contaner {
      width: 100%;
      position: absolute;
    }

    .box {
      /* width: 50%; */
      margin: 30px;
      position: relative;
      top: 50%;
      margin-left: 10%;
      margin-right: 10%;
      /* transform: translate(-50%, -50%); */
      /* border-radius: 10px; */
      margin-bottom: 10px;
      border: 1px solid #333333;
    }

    /* .box table{

} */
    body {
      font-family: 'Nunito', sans-serif;

      line-height: 1;

    }

    .title {
      font-weight: bold;
      font-size: 24px;
      margin-bottom: 15px;
      text-align: center;
    }

    .button_find {
      border-radius: 4px;
      background: #000;
      color: #ffffff;
      width: 135px;
      height: 32px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    /* .div {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  font-size: 100%;
  vertical-align: baseline;
  background: transparent;
} */

    /* table {
  border-collapse: collapse;
  border-spacing: 0;
  text-indent: initial;
  width: 100%;
  text-align: center;
} */

    tr {
      display: table-row;
      height: 50px;
    }

    th {
      display: table-cell;
      /* vertical-align: inherit; */
      font-weight: bold;
      text-align: -internal-center;
    }

    .button_delete {
      text-align: right;
      border: 2px solid #000;
      /* font-size: 12px; */
      color: #fff;
      /* font-weight: bold; */
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
      border-radius: 5%;
    }
    a{text-align: center;}
  </style>
</head>

<body>
  <main>
    <div class="card">
      <p class="title">管理システム</p>
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <div class="container">
        <form action="/Management/find" method="post">
          @csrf
          <div class="box">
            <table>
              <tr>
                <th>
                  お名前
                </th>
                <td><input type="text" class="manage_form" name="content"></td>
                <td>
                  <label for="gender_male" class="male">
                    <input id="gender_male" type="radio" name="gender" value="male" checked="checked" class="male" style="transform:scale(1.5);">
                    全て
                  </label>
                  <label for="gender_female" class="female">
                    <input id="gender_female" type="radio" name="gender" value="female" class="female" style="transform:scale(1.5);">男性
                    <sp class="under_name">
                      <label for="gender_male" class="male">
                        <input id="gender_male" type="radio" name="gender" value="male" class="male" style="transform:scale(1.5);">
                        女性
                      </label>
                </td>
              </tr><br>
              <tr>
                <th>登録日</th>
                <td><input type="text" class="manage_form" name="content" /></td>
                <td>〜<input type="text" class="manage_form" name="content" /></td><br>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td><input type="text" class="manage_form" name="content" /></td>
              </tr>
            </table>
            <input class="button_find" type="submit" value="検索" /><br>
            <a href="http://">リセット</a>
          </div>
        </form>
      </div>
      <div class="manage_list">
        <table>
          <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
          </tr>
          {{ $contacts->links() }}
          @include('Management/lists')
        </table>
      </div>
    </div>
  </main>
</body>

</html>