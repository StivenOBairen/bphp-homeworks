<?php
function generate($rows, $placesPerRow, $avaliableCount) {
    $map = [];
    if (($rows * $placesPerRow) > $avaliableCount) {
        echo 'Ошибка построения карты зала! Проверьте количество доступных мест.<br>';
        return false;
    }
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $placesPerRow; $j++) {
            $map[$i][$j] = false;
        }
    }
    return $map;
}

function reserve($map, $row, $place) {
  if ($map[$row - 1][$place - 1] === false) {         //usually humans start counting from '1', lets add -1 to the array indexes
        $map[$row - 1][$place - 1] = true;
        return true;
    } else {
        return false;
    }
}

$chairs = 50;
$map = generate(5, 8, $chairs);

$requireRow = 5;
$requirePlace = 8;

$reserve = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reserve);

function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}
?>
