<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            text-align: center;
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>ログイン入力</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">ログイン情報入力</nav>
    </header>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="login_act.php" method="post">
        ログインID : <input type="text" name="lid" placeholder="ログインID"/>
        パスワード : <input type="password" name="lpw"  placeholder="忘れないでね"/>
        <input type="submit" value="LOGIN" />
    </form>


</body>

</html>
