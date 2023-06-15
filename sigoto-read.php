<?php

$str = '';
$array = [];

$file = fopen('data/todo.txt', 'r');
flock($file, LOCK_EX);
if ($file) {
  while ($line = fgets($file)) {
    // 取得したデータを`$str`に追加する
    $str .="<tr><td>{$line}</td></tr>";
    array_push($array, $line);
  }
}
flock($file, LOCK_UN);

fclose($file);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>作業表示</legend>
    <a href="sigoto-input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>作業指示記録　（日時　内容　作業時間）</th>
          <?=$str?>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </fieldset>
</body>

</html>