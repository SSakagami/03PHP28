<?php
//function 辞典としてのPHPを作成？///////////////////////////
//XSS対応（ echoする場所で使用！）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数：db_conn()・・・自分で名前決めて問題ない 
//※関数を作成し、内容をreturnさせる。
//※ DBname等、今回の授業に合わせる。

function db_conn(){
    try {
        $db_name = "";    //データベース名
        $db_id   = "";      //アカウント名
        $db_pw   = "";      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = ""; //DBホスト
        // $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        
        return $pdo; //ここを追記！！超重要
      } catch (PDOException $e) {
      exit('DBConnectError:'.$e->getMessage());
    }
}

//SQLエラー関数：sql_error($stmt) $stmtは引数
function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:" . print_r($error, true));
};

//リダイレクト関数: redirect($file_name)
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}