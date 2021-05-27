<!DOCTYPE html>
<html lang="jp">

<head>
<meta charaset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <img src="4eachblog_logo.jpg" class="header_logo" name="logo">
    <ul class="header_menu">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>
<body>
<div class="containter">
    <div class="left">
    <h1 name="formname">プログラミングに役立つ掲示板</h1>
        <div class="form">
            <form method="post" action="insert.php">
            
            <h2>入力フォーム</h2>
                <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" name="handlename">
                </div>

                <div>
                <label>タイトル</label>
                <br>
                <input type="text" name="title">
                </div>

                <div>
                <label>コメント</label>
                <br>
                <textarea cols="45" rows="8" name="comments"></textarea>
                </div>

                <div>
                <input type="submit" value="投稿する">   
                </div>             
            </form>
        </div>
        
        <div class="touko">
            <p class="title">タイトル</p>
            <p>記事の中身</p>
            <p>pelloed by あいうえお</p>
        </div>
        <div class="touko">
        <p class="title">タイトル</p>
            <p>記事の中身</p>
            <p>pelloed by あいうえお</p>
        </div>
        <div class="touko">
        <p class="title">タイトル</p>
            <p>記事の中身</p>
            <p>pelloed by あいうえお</p>
        </div>
        
    </div>

    <div class="right">
        <ul>   
            <h2>人気の記事</h2>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの基礎</li>
        </ul>
        <ul>   
            <h2>オススメリンク</h2>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
        <ul>   
            <h2>カテゴリ</h2>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>
</div>
</body>

<footer>
copynight(c)internous |4each blog the which provides A to Z about programming.
</footer>

</html>