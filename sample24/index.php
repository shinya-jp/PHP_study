<?php
$value = '変数に保存した値です';
setcookie('save_message', 'cookieに保存した値です', time() + 60 * 60 * 24 *14); #１４日間保存される
// save_messageは変数　timeは保存しておく時間
?>

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
	<a href="page02.php">page02へ</a>
</pre>
</main>
</body>
</html>