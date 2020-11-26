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
$news = file_get_contents('../../news_data/news.txt');
// 先頭行に追加
$news = "2020-11-25 一部エラー改善\n" . $news;
// 最終行に追加
$news .= "2020-11-29 新商品の入荷";
file_put_contents('../../news_data/news.txt', $news);
print($news);

// readfile('../../news_data/news.txt');
// file_get_contensのほうが変更は加えやすい
// データを読み込むだけならreadfileでいいかも
?>
</pre>
</main>
</body>
</html>