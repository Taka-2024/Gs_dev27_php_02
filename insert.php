<?php

//1. POSTデータ取得
$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$address =$_POST['address'];

//2. DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_asg02;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//3．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO 
              gs_asg02_table (id, name, email, password, address) 
              VALUES         (NULL, :name, :email, :password, :address ) ');


//  4. バインド変数を用意
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);

//  5. 実行
$status = $stmt->execute();

//6．データ登録処理後
if(!$status){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  header('Location: index.php');
}
?>
