<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-widthz, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('/css/riset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/confirm.css')}}">
  <title>COACHTECH</title>

</head>

<body>
  <div class="container">
    <div class="card">

      <p class="title mb-15">管理システム</p>
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <div class="todo">
        <form action="/todo/create" method="post" class="flex between mb-30">
          @csrf
          <input type="text" class="input-add" name="content" />
          <input class="button-add" type="submit" value="追加" />
        </form>
        <table>
          <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
          </tr>
          @foreach($todos as $todo)
          <tr>
            <td>
              <form action="{{ route('contacts.delete', ['id' => $contacts->id]) }}" method="post">
                @csrf
                @method('POST')
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>

</html>