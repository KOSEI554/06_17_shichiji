<?php
session_start();
include("funcs.php");
$pdo = db_connect();
// var_dump($_POST);
// exit();

// $name = $_POST["name"];
// $usern = $_POST["usern"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];

$dbn  = "mysql:dbname=gsf_d06_db17;charset=utf8;port=3306;host=localhost";
$user = "root";
$pwd = "";


// if( !filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
//   echo "入力に間違いがあります。";
//   // var_dump($stmt);
//   // exit();
//   return false;
// }

// POSTされたメールアドレス検索
  try{
    $stmt = $pdo->prepare("SELECT * from user_table where mail = :mail AND pass = :pass");
    $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
    $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
    $status = $stmt->execute(); 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // $value = $row["mail"];
    // var_dump($value);

    if ($table = $stmt -> fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['chk_ssid'] = session_id();
      $_SESSION['usern'] = $table['usern'];
      // $_SESSION['mail'] = $table['mail'];
      // $_SESSION['time'] = time();
      header('Location: mypage.php');
      exit;
      }else{
      echo "メールアドレスもしくはパスワードが間違っています。";
        }

  } catch(PDOException $e){
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    echo "できてない";
    return false;
  }


























// //mailが存在しているか確認
// if(!isset($row["mail"])){
//   // var_dump($row);
//   // exit();
//   echo "メールアドレスもしくはパスワードが間違っています。";
//   return false;
// }


// //パスワード確認
// $hash  =  password_hash( 'pass', PASSWORD_DEFAULT );
// if(password_verify($pass,$hash)){
//   session_regenerate_id(true); //新しく作って置き換える
//   $_SESSION["mail"] = $row["mail"];
// } else{
  
//   echo "メールアドレスもしくはパスワードが間違っています。②";
//   return false;
// }


// //パスワード確認
// if(password_verify($mail,$pass)){
//   session_regenerate_id(true); //新しく作って置き換える
//   $_SESSION["mail"] = $row["mail"];
//   echo "ログインしました";
// } else{
//   echo "メールアドレスもしくはパスワードが間違っています。②";
//   return false;
// }


// //POSTされたメールアドレス検索
// try{
//   $pdo = new PDO($dbn, $user, $pwd);
//   $stmt = $pdo->prepare("SELECT * from `user_table` where mail = :mail" );
//   $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
//   $status = $stmt->execute(); 
//   $row = $stmt->fetch(PDO::FETCH_ASSOC);
//   // $value = $row["mail"];
//   // var_dump($value);


//   // $error = $stmt->errorInfo();
//   // exit('sqlError:'.$error[2]);
//   // exit();
//   // echo "できてる";
//   // $output = "";
//   // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
//   // $output = "";
//   // $value = 
//   // foreach ($ as $) {
//   //   $output .= "<tr>";
//   //   $output .= "<td>{$row["mail"]}</td>";
//   //   $output .= "</tr>";
//   // }
//   // foreach ($stmt as $row){
//   //   echo "$mail";
//   // }
//   // foreach ($row as $mail){
//   //   echo "$mail";
//   // }


// } catch(PDOException $e){
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   echo "できてない";
//   return false;
// }