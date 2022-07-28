<?php
mb_internal_encoding("utf8");

session_start();

//mypage.phpからの導線以外は、『login_error.php』へリダイレクト
if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}


?>

<!doctype html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>マイページ編集</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

    <body>

    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="log_out.php">ログアウト</a></div>
    </header>

    <main>
        <form action="mypage_update.php" method="post">
            <div class="confirm">
                <div class="form_contents">
                    <h2>会員情報</h2>
                    <?php echo "こんにちは! ".$_SESSION['name']."さん"; ?>
                </div>
                <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture']; ?>">
                </div>
                <div class="profile_text">
                    <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                    <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                    パスワード：<input type="password" size="30" value="<?php echo $_SESSION['password']; ?>" name="password">
                </div> 
                <div class="comments_contents">
                    <textarea rows="3" cols="73" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>
                <div class="editbutton">
                    <input type="submit" class="submit_button" value="この内容に変更する">
                </div>
            </div>
        </main>

    <footer>
    © 2018 InterNous.inc All rights reserved
    </footer>

    </body>

</html>