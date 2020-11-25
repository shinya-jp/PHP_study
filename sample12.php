<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
// 0を表示させる 01月２３日
// %の後が何桁表示を指定している
// dは整数データ　sは文字列
$date = sprintf('%04d年 %02d月 %02d日', 2018, 1, 23);
print($date);
// print(' 11月 5日')
?>
</pre>
</main>
</body>
</html>