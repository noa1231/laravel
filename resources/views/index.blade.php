<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>トップページ</h2>
  <form action="/thanks" method="post">
    @csrf
  <div>
    <p>氏名</p>
    <input type="text" name="name">
  </div>
  <div>
    <p>メールアドレス</p>
    <input type="email" name="email">
  </div>
  <input type="submit" value="送信する">
  </form>
</body>
</html>