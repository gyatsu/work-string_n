<?php

$s = hoge;
$n = 3;

if (condition) {
  echo ★
} else {
  echo "★以下正の整数を入力してください";
}

$s_origin = "hoge"
$s = mb_substr("$s", $n-1, 1,"UTF-8")
echo $s."\n";


mb_substr
文字数で数えてくれるので
バイト数の問題は解消されます。設定が少し増えます。


$moji = mb_substr("引数1", 引数2, 引数3, "引数4");
引数1：文字列、または文字列の入った変数を指定
引数2：切り抜き開始位置を数字で指定。先頭は0です。
引数3：文字の長さを指定。引数4を設定した場合は必須項目です。
引数4：文字エンコーディングを指定。



// 長さm の半角アルファベット文字列s と 正の整数n が入力された時、
// 文字列s の1番左の文字を1文字目として、n文字目のアルファベットを出力せよ。
// ただし、n が m よりも大きい値をとる場合は、"m以下 正の整数を入力してください"と出力せよ。
// [実行結果例]
// // s = "hoge", n = 3
// g
// // s = "hoge", n = 5
// 4以下の正の整数を入力してください