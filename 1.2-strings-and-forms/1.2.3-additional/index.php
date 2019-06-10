<?php
$siteToCheck = 'https://example.com';
echo "Does the site use HTTP? <br> INPUT: $siteToCheck <br>";
echo "substr";
if (substr($siteToCheck, 0, 8) === 'https://') {  // 8 is for 'https://' leight
    echo 'OUTPUT: Да <br>';
} else {
    echo 'OUTPUT: Нет <br>';
}
echo "strpos";
if (strpos($siteToCheck, 'https://') !== false) {
    echo 'OUTPUT: Да <br>';
} else {
    echo 'OUTPUT: Нет <br>';
}

$baseData = '05-29-1993';
echo "<br>Date formating...<br> INPUT: $baseData<br>";
$mnth= substr($baseData,0, 2);
$day = substr($baseData,3, 2);
$year = substr($baseData,6, 4);
$outputDate = $day.'.'.$mnth.'.'.$year;
echo 'OUTPUT: '.$outputDate.'<br>';


$inputPrice = '1050';
echo "<br>Price formating... <br> INPUT: $inputPrice<br>";
if (strlen($inputPrice) > 6 ) {
    $firstIteration = substr_replace($inputPrice, ' ', -3, 0);
    $outputPrice = substr_replace($firstIteration, ' ', -7, 0);
} else {
    $outputPrice = substr_replace($inputPrice, ' ', -3, 0);
}
echo 'OUTPUT: '.$outputPrice.' руб.<br>';
?>
