<?php
  //var_dump($_POST);
  //exit();
  $作業内容 = $_POST["naiyou"];
  $作業時間 = $_POST["jikan"];
  $作業日 = $_POST["hiniti"];

  $write_data = "{$作業日} {$作業内容} {$作業時間}\n";

  

  $file = fopen('data/todo.txt', 'a');
  flock($file, LOCK_EX);
  fwrite($file, $write_data);
  flock($file, LOCK_UN);
  fclose($file);

  header("Location:sigoto-input.php");
  exit();
?>

