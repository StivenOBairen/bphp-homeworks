<?php
//prevents lowercase in first letters
function mb_ucfirst($string, $encoding) {
    $strlen = mb_strlen($string, $encoding);                    //а multi-byte character is counted as 1
    $firstLetter = mb_substr($string, 0, 1, $encoding);
    $afterFirstLetter = mb_substr($string, 1, $strlen - 1, $encoding);
    return mb_strtoupper($firstLetter, $encoding).$afterFirstLetter;
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];

$fullName = mb_ucfirst($lastName,'utf-8').' '.mb_ucfirst($firstName,'utf-8').' '.mb_ucfirst($middleName,'utf-8');
$fio = mb_ucfirst(mb_substr($lastName, 0, 1),'utf-8').mb_ucfirst(mb_substr($firstName, 0, 1),'utf-8').mb_ucfirst(mb_substr($middleName, 0, 1),'utf-8');
$surnameAndInitials = mb_ucfirst($lastName,'utf-8').' '.mb_ucfirst(mb_substr($firstName, 0, 1),'utf-8').'.'.mb_ucfirst(mb_substr($middleName, 0, 1),'utf-8').'.';

echo "<div>Полное имя: '$fullName' </div>
      <div>Фамилия и инициалы: '$surnameAndInitials'</div>
      <div>Аббревиатура: '$fio'</div>";

?>
