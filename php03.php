<?php

//1. 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

$value = 6;
echo $value * 2;
echo "<br>";

//2. $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
//参考）引数は下記のように指定すると、複数の仮引数を使うことができます。

function f($a, $b){
    echo $result = $a + $b;
  }
f(2, 3);
echo "<br>";

//3. $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

$arr = array(1, 3, 5 ,7, 9);
echo array_product($arr);
echo "<br>";

//4. 【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr) {
// とりあえず配列の最初の要素を1番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
    }
}
return $max_number;
}
echo max_array(array(1, 3, 5 ,7, 9));
echo "<br>";

//5. 次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください。

$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
echo "<br>";

$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);
echo "<br>";

$data = array("TV1" => "500", "TV2" => "1000", "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);
echo "<br>";

$now = time();
print $now;
echo "<br>";

$timestamp = mktime(0, 0, 0, 20, 11, 2015);
print $timestamp;
echo "<br>";

$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
echo "<br>";

?>