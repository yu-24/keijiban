<?php
mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=lesson01; host =localhost;" ,"root","");

$pdo -> exec("insert into 4each_keijiban(handlename,title,comments)values
('".$_POST['handlename']."','".$_POST['mail']."''".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");

?>

<!DOCTYPE html>
<html lang="jp">

<head>
<meta charaset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <img src="/4eachblog_logo.jpg" class="header_logo" name="logo">
</header>
<body>
    <div class="form">
        <h2>入力フォーム</h2>
        <div>
            <p>ハンドルネーム</p>
            <?php echo $_POST['handlename'];?>
        </div>

        <div>
            <p>タイトル</p>
            <?php echo $_POST['title'];?>
        </div>

        <div>
            <p>コメント</p>
            <?php echo $_POST['comments'];?>
        </div>
         
    </div>      
</body>
</html>