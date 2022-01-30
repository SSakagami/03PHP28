<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MC Cheer UP form</title>
    <script src="./js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="./css/sample.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>
    <h1 class="headerfont">MC CheerUP</h1>
    <form class="center" action="?" method="post" name="enter">
        <select class="box" name="master_name" id="" required>
            <option value="" selected='selected'>選択してください</option>
                <option value="1" data-val="1">孫悟空</option>
                <option value="2" data-val="1">孫悟飯</option>
                <option value="3" data-val="1">孫悟天</option>
                <option value="4" data-val="2">ベジータ</option>
                <option value="5" data-val="2">トランクス</option>
                <option value="6" data-val="3">ピッコロ</option>
                <option value="7" data-val="3">ヤムチャ</option>
                <option value="8" data-val="3">クリリン</option>
                <option value="9" data-val="4">天津飯</option>
                <option value="10" data-val="4">チャオズ</option>
                <option value="11" data-val="4">亀仙人</option>
                <option value="12" data-val="5">牛魔王</option>
                <option value="13" data-val="5">ブゥ</option>
                <option value="14" data-val="5">ビーデル</option>
                <option value="15" data-val="5">パン</option>
        </select>
        <div class="parts">
            <p class="parts"><input class="buttonbox" type="submit" formaction="read_personal.php" value="みんなからのCheerUP" id="confirm"></p>
            <p class="parts"><input class="buttonbox" type="submit" formaction="form.php" value="みんなをCheerUP" id="register"></p>
            <p class="parts"><input class="buttonbox" type="submit" formaction="select_personal.php" value="入力確認" id="confirm_input"></p>
        </div>
    </form>
    <div class=center>
        <a href="select.php">管理画面</a>
    </div>
</body>

<script>
    $('#confirm').on('click', function(){
        var result=checkForm();
    })

    $('#register').on('click', function(){
        var result=checkForm();
    })

    $('#confirm_input').on('click', function(){
        var result=checkForm();
    })

    function checkForm(){
    if(document.enter.master_name.value == ""){
        alert("名前を選択して下さい。");
	return false;
    }else{
	return true;
    }
}
</script>


</html>