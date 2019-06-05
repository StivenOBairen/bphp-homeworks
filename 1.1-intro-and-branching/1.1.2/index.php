 <?php
 //  Ваш программный код, в котором определяются значения
 //  переменных для последующего задания текста и стилей
 $greetText = "Добро пожаловать";
 $image = 'img/test.jpg';
//get time, choose backgrounImg and $greetText
$timeNow = date("H")+5; //local timezone is UTC+5
  if($timeNow >= 6 && $timeNow < 11) {
    $greetText = "Доброе утро";
    $image = 'img/morning.jpg';
  } else if($timeNow >= 11 && $timeNow < 18) {
    $greetText = "Добрый день";
    $image = 'img/day.jpg';
  } else if($timeNow >= 18 && $timeNow < 23) {
    $greetText = "Добрый вечер";
    $image = 'img/evening.jpg';
  } else {
    $greetText = "Доброй ночи";
    $image = 'img/night.jpg';
  }

//get number of day, convert it to russian
$daysOfWeek = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
$dateToday = $daysOfWeek[date("N")-1];
//extra
//working hours of Horns&Hooves
  if(date("N") >= 1 && date("N") <= 3) {
      if($timeNow >= 9 && $timeNow < 18) {
        $isOnTimetable = true;
      }
  } else if (date("N") >= 4 && date("N") <=6) {
      if($timeNow >= 10 && $timeNow < 18) {
        $isOnTimetable = true;
      }
  } else {
    $isOnTimetable = false;
  }

//count what hour the working day starts next day
$nextDayStart = 9;
if(date("N") >= 3 && date("N") != 6) {
  $nextDayStart = 10;
}
//extra greeting msg
if($isOnTimetable) {
    $extraGreet = "Это лучший день, чтобы обратиться в Horns&Hooves!<br> Мы работаем для Вас до 18.00";
} else if(!$isOnTimetable && $dateToday == 6) {
    $extraGreet = "Послезавтра - лучший день, чтобы обратиться в Horns&Hooves!<br> Мы работаем для Вас с $nextDayStart.00 ";
} else if (!$isOnTimetable && $dateToday != 6) {
    $extraGreet = "Завтра - лучший день, чтобы обратиться в Horns&Hooves!<br> Мы работаем для Вас с $nextDayStart.00 ";
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>bPHP - 1.1.1</title>
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
    <div class="img" style="background-image: url(<?= $image; ?>)">
      <div class="greeting">
        <h1><?= $greetText;?>!<br>
            Сегодня - <?= $dateToday; ?>.<br>
            <?= $extraGreet; ?>
        </h1>
      </div>
    </div>
 </body>
 </html>
