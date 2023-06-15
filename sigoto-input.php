<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="sigoto-create.php" method="POST">
    <fieldset>
      <legend>作業記録表</legend>
      <a href="sigoto-read.php">一覧画面</a>
      <div>
        作業内容: <input type="text" name="naiyou">
      </div>
      <div>
        作業時間: <input type="text" name="jikan">
      </div>
      <div>
        作業日: <input type="date" name="hiniti">
      </div>
      <div>
        <button>記録</button>
      </div>
    </fieldset>
  </form>
    
</body>
</html>