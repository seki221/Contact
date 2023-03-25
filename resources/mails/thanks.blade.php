<style>
  button {
    border-radius: 4px;
    background: #000;
    color: #ffffff;
    width: 135px;
    height: 32px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
  }

  .thanks {
    text-align: center;
    margin-top: 30%;
  }

  .position {
    height: 100%;
  }
</style>
<div class="position">
  <div class="thanks">ご意見いただきありがとうございました。</div>
  <form action="/top" method="POST">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <button type="button" name="action" value="submit">トップページへ</button>
    <a href="{{ route('index') }}" class="back_btn">修正する</a>
  </form>
</div>