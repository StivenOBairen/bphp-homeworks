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

function findNear($nearPlaces, $map) {
    $rowCount = count($map);
    $columnCount = count($map[0]);                  //no matter what $map[] would we count, let it be $map[0]
    for ($i = 0; $i < $rowCount; $i++) {
        $place = 0;                                 //$nearPlaces counter
        for ($j = 0; $j < $columnCount; $j++) {
            if ($j > $columnCount - $nearPlaces + 1) {
                break;                              //stop checking relevant indexes in a row to skip other ones
            }
            if ($map[$i][$j] === false) {           //is targer place empty?
                $place++;
                if ($place == $nearPlaces) {
                    echo 'Доступные места: ряд '. ($i+1) . ',' . ' места с ' . ($j+1 - $nearPlaces+1). ' по ' . ($j+1) . '<br></br>';
                    return;                         //need just first relevant result
                }
            } else {
                $place = 0;                         //update counter for new iteration in a new row
            }
        }
    }
}


$chairs = 50;
$map = generate(5, 8, $chairs);

findNear(3, $map);
?>
