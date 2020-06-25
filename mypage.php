<?php
session_start();
include("funcs.php");
loginCheck();
$pdo = db_connect();



// $sid = session_id();
// echo "$sid";

// if(isset($_POST["search"])){
//   $search = $_POST["search"];
//   $search_value = $search;
// }else{
//   $search = "";
//   $search_value = "";
// }

// $stmt = $pdo->prepare("SELECT * FROM user_table LIKE '%$search%'");
// $display = array();
// $status = $stmt->execute();
// while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
//   $view = "";
//   $view .= $result["usern"];
// }

// $stmt = $pdo->prepare("SELECT * FROM user_table");
// $status = $stmt->execute();
// $view = "";
// if($status==false){
//   $error = $stmt->errorInfo();
//   exit("ErrorQuery:".$error[2]);
// }else{
//   while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
//     $view .= "<p>";
//     $view .= $result["usern"];
//     $view .= "</p>";
//   }
// }


    // //データベースへ接続
    // $dbn = 'mysql:dbname=gsf_d06_db17;charset=utf8;port=3306;host=localhost';
    // $user = 'root';
    // $pwd = '';
    // $options = [];
    // $pdo = new PDO($dbn, $user, $pwd, $options);
    //     if(@$_POST["search"] != ""){ //ユーザー名の入力有無を確認
    //         $stmt = $pdo->query("SELECT * FROM user_table WHERE usern LIKE  '%".$_POST["search"]."%')"); 
    //         //SQL文を実行して、結果を$stmtに代入する。
    //         while($result = )
  //   //     }
  // if (
  //   !isset($_POST['search']) || $_POST['search']=='' 
  // ){
  //   exit('入力されていません');
  // }




?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>マイページ</title>
</head>
<body>
  <div class="out"><a href="logout.php">ログアウト</a></div>
  <div>こんにちは！ <br>
  <?php echo $_SESSION['usern'] ?>さん！</div>
  <div>
    <form action="" method="post">
      <p>ユーザー検索</p>
      <input type="search" name="search">
      <input type="submit" value="検索">
    </form>
  </div>
</body>
</html>
