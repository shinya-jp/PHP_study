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
		$zip = '111-2222'; #郵便番号

		$zip = mb_convert_kana($zip, 'a', 'utf-8');

		if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)){
			// \A文章の頭から dは数字{}回数　\z文章の最後まで
			print('郵便番号：〒' . $zip);
		} else {
			print('この形で入力してください 111-2222');
		}
	?>
</pre>
</main>
</body>
</html>