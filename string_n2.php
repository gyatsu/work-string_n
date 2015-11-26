<?php

echo "半角の文字列を入力して下さい\n";
$string = rtrim(fgets(STDIN));
echo "何番目の文字列を出力しますか\n";
$n = fgets(STDIN);
$string_length = strlen($string);
$m = $string_length;
$a = substr("$string", $n-1, 1);

echo "--------------------\n";
if ($n <= $m) {
  echo "取り出された文字は\n";
  echo "「".$a."」です。\n";
} else {
  echo "エラーです\n";
  echo $m."以下の正の整数を入力してください\n";
}