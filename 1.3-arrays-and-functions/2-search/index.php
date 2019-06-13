<?php
function generate($rows, $placesPerRow, $avaliableCount) {
    $map = [];
    for ($i = 0; $i < $rows; $i++) {
        for($j = 0; $j < $placesPerRow; $j++) {
            $map[$i][$j] = false;
        }
    }
    if ($rows * $placesPerRow > $avaliableCount) {
      return false;
    } else {
      return $map;
    }
}

function reserve($map, $row, $place) {
    if ($map[$row + 1][$place + 1] === false) {
        $map[$row + 1][$place + 1] = true;
        return true;
    } else {
        return false;
    }
}

function findNear($nearPlaces, $map) {
    $rowCount = count($map);
    $columnCount = count($map[0]);        //no matter what $map[] wwould we count, let it be $map[0]
    for ($i = 0; $i < $rowCount; $i++) {
        $place = 0;
        var_dump($map[$i]);
        for ($j = 0; $j < $columnCount; $j++) {
            if ($j > $columnCount - $nearPlaces + 1) {
                continue;                 //check first relevant indexes in a row and skip other ones
            }
            if ($map[$i][$j] === false) { //is targer place empty?
                $place++;
                if ($place == $nearPlaces) {
                    echo 'Доступные места: ряд '. ($i+1) . ',' . ' места с ' . ($j+1 - $nearPlaces+1). ' по ' . ($j+1) . '<br></br>';
                    continue;
                }
            } else {
                $place = 0;               //update counter for new iteration
            }
        }
    }
}


$chairs = 50;
$map = generate(5, 8, $chairs);

findNear(3, $map);
?>
