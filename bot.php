<?php
//twitterouthライブラリ読み込み
require_once('twitteroauth-master/autoload.php');
require_once('twitteroauth-master/src/TwitterOAuth.php');
use Abraham\TwitterOAuth\TwitterOAuth;

require_once('config.php');
//db connect
$pdo = db_conn();

//一緒のテーブル作成
$union ='(SELECT word FROM kanki UNION SELECT word FROM ohki)';
// $sql = "SELECT * FROM '".$union."' as GOOD ORDER BY RAND() LIMIT 1";  ???：つなげ方
$sql = "SELECT * FROM (SELECT word FROM kanki UNION SELECT word FROM ohki) as GOOD 
        ORDER BY RAND() LIMIT 1";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

try{
  if ($status==false) {
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
  } else {
    if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $twitter = $result["word"];
    // echo($result['word']);
      $connection = new TwitterOAuth(consumer_key,consumer_sec,access_token,access_sec);
      $statues = $connection->post("statuses/update", ["status" => $twitter]);

    }else{
      echo 'Error!' . $statues->errors[0]->message . PHP_EOL; ;
    }
  }
  } catch (PDOException $e){
    exit();
  }




// $statues = $connection->post("statuses/update", ["status" => "ohohoh"]);
// if ($connection->getLastHttpCode() == 200) {
//     echo "success" . PHP_EOL;
// } else {
//     // Handle error case
//     echo 'Error!' . $statues->errors[0]->message . PHP_EOL; ;
// }