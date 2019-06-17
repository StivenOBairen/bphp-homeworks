<?php
if (($file = fopen('data.csv', 'r')) !== false) {
    $keys = fgetcsv($file, 1000, ';');
    $name = $keys[0];
    $art = $keys[1];
    $price = $keys[2];
    $json = [];
    while (($data = fgetcsv($file, 1000, ';')) !== false) {
        array_push($json, [
            $name => $data[0],
            $art => $data[1],
            $price => $data[2],
        ]);
    }
    fclose($file);
}
print json_encode($json, JSON_UNESCAPED_UNICODE);
file_put_contents('data.json', json_encode($json, JSON_UNESCAPED_UNICODE));
?>
