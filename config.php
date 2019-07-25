<?php
define('consumer_key', 'x3JZ65Mhq4q1fewaUn83efzhQ');
define('consumer_sec', '2V7VjOsJDyF3ZOiV36oZPGF0xBB5KPafzNeh0BJniFNpUX5n4Z');
define('access_token', '1153309225566629889-bjLhmKEez10rY2CwqxvO06NRUKojI3');
define('access_sec',   '6u5hp0vWIkkpjLOIBMUIrPmuSUYYsQpppdWxZ48qPUeeQ');


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