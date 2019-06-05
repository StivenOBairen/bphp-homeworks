<?php
$variable = 3.14;

$boolDescription = 'Это простейший тип. boolean выражает истинность значения. Он может быть либо TRUE, либо FALSE.';
$floatDescription = 'Числа с плавающей точкой (также известные как "float", "double" или "real").';
$intDescription = 'Целые числа Integer - это число из множества ℤ = {..., -2, -1, 0, 1, 2, ...}.';
$stringDescription = 'Строка (тип string) - это набор символов, где символ - это то же самое, что и байт.';
$nullDescription = 'Специальное значение NULL представляет собой переменную без значения.';
$otherDescription = 'Переменные типов Array, Object, Resource.';

$infoFrom = 'https://www.php.net/manual/ru/function.gettype.php';

echo $variable, ' is ', gettype($variable);

if(is_bool($variable)) {
  echo "<br> $boolDescription";
} else if(is_float($variable)) {
  echo "<br> $floatDescription";
} else if(is_int($variable)) {
  echo "<br> $intDescription";
} else if(is_string($variable)) {
  echo "<br> $stringDescription";
} else if(is_null($variable)) {
  echo "<br> $nullDescription";
} else {
  echo "<br> $floatDescription";
}
echo "<p>Справочная информация любезно предоставленна ресурсом $infoFrom</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$type?></p>
</body>
</html>
