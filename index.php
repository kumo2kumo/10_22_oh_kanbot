<?php

require_once("./phpQuery-onefile.php");
$html = file_get_contents("https://meigenkakugen.net/kanki/");


$contents = phpQuery::newDocument($html)->find('.graybox ')->text();
$word1 = str_replace( "この名言いいね！",'',$contents);
$word2 = str_replace("- 【キングダム】桓騎（かんき）の名言・名セリフ ",'',$word1);
//一つずつ配列に入れる
$arr =explode("-", $word2);
// var_dump($arr);

//db接続
$dbn ='mysql:dbname=gsf_d03_db22;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
  exit('dbError:'.$e->getMessage());
  }

for($i = 0;$i < count($arr);$i++) {
  $sql = "INSERT INTO kanki (id,word) VALUES (NULL,:a1)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':a1', ".$arr[$i].", PDO::PARAM_STR);
  $status = $stmt->execute();
  
 }
//  if ($status==false) {
//   $error = $stmt->errorInfo();
//   exit('sqlError:'.$error[2]);
//    } else {
//   header('Location: index.php');
//  }





