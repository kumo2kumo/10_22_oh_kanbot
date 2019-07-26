<?php
//twitterouthライブラリ読み込み
require_once('twitteroauth-master/autoload.php');
require_once('twitteroauth-master/src/TwitterOAuth.php');
use Abraham\TwitterOAuth\TwitterOAuth;

// require_once('config.php');
require '../../php/vendor/autoload.php';
$dotenv  = Dotenv\Dotenv :: create(__DIR__); 
$dotenv->load();

//db connect
function db_conn(){
  $dbn ='mysql:dbname=gsf_d03_db22;charset=utf8;port=3306;host=localhost';
  $user = 'root';
  $pwd = '';
  try {
   return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    exit('dbError:'.$e->getMessage());
  }
}
$pdo = db_conn();

//一緒のテーブル作成
$union ='(SELECT word FROM kanki UNION SELECT word FROM ohki)';
// $sql = "SELECT * FROM '".$union."' as GOOD ORDER BY RAND() LIMIT 1";  ???：つなげ方
$sql = "SELECT * FROM (SELECT word FROM kanki UNION SELECT word FROM ohki) as GOOD 
        ORDER BY RAND() LIMIT 1";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//key get
$consumer_key  =  getenv('consumer_key');
$consumer_sec  =  getenv('consumer_sec');
$access_token  =  getenv('access_token');
$access_sec  =  getenv('access_sec');



try{
  if ($status==false) {
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
  } else {
    if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $twitter = $result["word"];
    // echo($result['word']);
      $connection = new TwitterOAuth($consumer_key,$consumer_sec,$access_token,$access_sec);
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