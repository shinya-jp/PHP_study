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

echo "Mysqlの学習はじめました。"
/*memo

SQL文は基本的には大文字
データベースの中身を見たいとき
 　SELECT  *      FROM 変数;
訳　見る　 すべて  どこから　変数を

データの追加
INSERT INTO items SET id=数値, name = “入力値”

指定したIDのデータを編集する方法
UPDATE my_items SET price = 180 WHERE id = 1;
更新する　どのデータの　変更したい箇所 　変更したい場所
WHERE以降（指定しないと）すべてが変更されてしまう

同じIDや名前にしたくない場合
primaryキーに設定する
IDは必ずprimaryキーに設定したほうが良い

AUTO_INCREMENT 自動でIDを順番に採番する
12 4 など3番めが削除されている場合は3に割り振りされるのではなく、5番になる

データの検索
SELECT * FROM テーブル名 WHERE カラム名　= ~~
例　SELECT * FROM my_items WHERE id = 1;
my_items　といったテーブル名のidが1番のものを検索した

データ型がtext型のときの文字検索の場合　単語が複数ある場合
例 keyword [甘い,硬い,大きい]
SELECT * FROM my_items WHERE keyword LIKE “%甘い%”
%甘い%や　甘い％などたくさんの条件検索方法がある

異なるテーブル同士をレリーションして見る方法
makers my_items というテーブルがあるとする
SELECT * FROM makers, my_items WHERE my_items. id = 1 AND 
makers. id = my_items .makers_id
リレーションしたいテーブルを記入
idなど、どちらのテーブルにあるカラムはどのテーブルか指定する
Makers id は　my_itemsのmakers_idと一致しているんですという意味
この文があることでリレーションできる

*/

?>
</pre>
</main>
</body>
</html>