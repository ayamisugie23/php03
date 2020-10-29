<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">買う本リスト</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>買いたい本を登録！</legend>
     <label>タイトル<input type="text" name="title"></label><br>
     <label>著者<input type="text" name="writer"></label><br>
     <label>出版社<input type="text" name="publisher"></label><br>
     <label>価格（税抜）<input type="text" name="price"></label><br>
     <label>Amazon URL<input type="text" name="amazon"></label><br>
     <label>メモ<textArea name="memo" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
