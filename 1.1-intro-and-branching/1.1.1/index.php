<?php
$variable = '3.14';

$boolDescription = 'Это простейший тип. boolean выражает истинность значения. Он может быть либо TRUE, либо FALSE.';
$floatDescription = 'Числа с плавающей точкой (также известные как "float", "double" или "real").';
$intDescription = 'Целые числа Integer - это число из множества ℤ = {..., -2, -1, 0, 1, 2, ...}.';
$stringDescription = 'Строка (тип string) - это набор символов, где символ - это то же самое, что и байт.';
$nullDescription = 'Специальное значение NULL представляет собой переменную без значения.';
$otherDescription = 'Переменные типов Array, Object, Resource.';

$infoFrom = '<a href="https://www.php.net/manual/ru/function.gettype.php">php.net</a>';

$type = $variable.' is';
if(is_bool($variable)) {
  $type = $type." bool <br> $boolDescription";
} else if(is_float($variable)) {
  $type = $type." float <br> $floatDescription";
} else if(is_int($variable)) {
  $type = $type." integer <br> $intDescription";
} else if(is_string($variable)) {
  $type = $type." string <br> $stringDescription";
} else if(is_null($variable)) {
  $type = $type." null <br> $nullDescription";
} else {
  $type = $type." other type <br> $otherDescription";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$type?></p>
    <p>Справочная информация любезно предоставленна ресурсом <?=$infoFrom?></p>
</body>
</html>
