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
$fruits = ['apple' =>'りんご',
			'grape' =>'ぶどう',
			'lemon' => 'レモン',
			'tomato' => 'とまと',
			'peach' => 'もも'
		];
// 値のみ出力
// foreach ($fruits as $value) {
// 	print ($value . PHP_EOL);
// }

// indexと値を出力
foreach ($fruits as $english => $japanese) {
	print ($english . " : " . $japanese . "\n");
}

?>
</pre>
</main>
</body>
</html>