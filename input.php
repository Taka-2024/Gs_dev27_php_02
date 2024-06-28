<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>基本情報の設定【SKILL LAKE】</title>
  <link rel="stylesheet" href="css\input_style.css">

</head>
<body>
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-2xl font-bold text-gray-800">基礎情報</h1>

    <form action="insert.php" method="post" class="mt-8">
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold">氏名</label>
        <input type="text" id="name" name="name" class="form-input w-full mt-1 border rounded-md shadow-sm">
      </div>

      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold">連絡先/メールアドレス</label>
        <input type="email" id="email" name="email" class="form-input w-full mt-1 border rounded-md shadow-sm">
      </div>

      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-bold">パスワード</label>
        <input type="password" id="password" name="password" class="form-input w-full mt-1 border rounded-md shadow-sm">
      </div>

      <div class="mb-4">
        <label for="confirmPassword" class="block text-gray-700 font-bold">住所</label>
        <input type="text" id="address" name="address" class="form-input w-full mt-1 border rounded-md shadow-sm">
      </div> 


      <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">登録</button>

    </form>
      <div class="mt-4 ">
        <button type="submit" onclick="location.href='./index.php'" class="bg-slate-500 text-white font-bold py-2 px-4 rounded-md hover:bg-slate-600">戻る</button>
      </div>

  </div>
  


</body>
</html>