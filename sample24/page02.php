<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
	変数に保存した値：　<?php echo $value; ?>
	<!--　画面を移動したりすると変数はなくなる
	保存しておきたい場合はcookieをしようする -->
	Cookie保存した値: <?php echo $_COOKIE['save_message']; ?>
</pre>
</main>
</body>
</html>