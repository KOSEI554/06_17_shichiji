<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ユーザー</title>
</head>
<body>
  <form action="create01.php" method="POST">
    <div class="torku">新規登録</div>  
      <ul class="item">
        <li><label for=""> 名前</label><input type="text" name="name"></li>
        <li><label for="">ユーザー名</label> <input type="text" name="usern"></li>
        <li><label for="">メールアドレス</label><input type="text" name="mail"></li>
        <li><label for="">パスワード</label><input type="text" name="pass"></li>
        <li><input type="submit" value="送信"></li>
      </ul>
  </form>
  <form action="login_act.php" method="POST">
    <div class="log">ログイン</div>
    <ul>
      <li><label for="">メールアドレス</label> <input type="text" name="mail"></li>
      <li><label for="">パスワード</label> <input type="text" name="pass"></li>
      <li><label for=""><input type="submit" value="ログイン"></label></li>
    </ul>
      
    
  </form>

</body>
</html>