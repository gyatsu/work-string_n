<?php

$string = "abcdefg";
$string_length = strlen($string);
$m = $string_length;
$n = 8;
$a = substr("$string", $n-1, 1);

if ($n <= $m) {
  echo $a."\n";
} else {
  echo $m."以下の正の整数を入力してください\n";
}