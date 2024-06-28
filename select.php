<?php

require_once('funcs.php');


//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_asg02;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//２．データ取得SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_asg02_table');
$status = $stmt->execute();

//３．データ表示
$view="";
if (!$status) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<p>';
    $view .= h($result['ID']) . '：  ' .h($result['name']) . '  ' . h($result['email']) . '  '. h($result['password']) . '  '. h($result['address']);
    $view .= '</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>データベース【SKILL LAKE】</title>
  <link rel="stylesheet" href="css/range.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">

  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="index.php">トップページへ</a>
        </div>
      </div>
    </nav>
  </header>

<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>

</body>
</html>
