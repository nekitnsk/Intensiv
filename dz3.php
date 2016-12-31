<?

echo "</br> домашнее задание 3 </br>";

// создаеи массив date и заполняем случайными датами с  01.01.1970 по настоящее время
$curTime = time();

$date = array(mt_rand(0, $curTime),mt_rand(0, $curTime),mt_rand(0, $curTime),mt_rand(0, $curTime),mt_rand(0, $curTime));


// сортируем даты по  возростанию
sort($date);

// инициализация массивов для хранения месяцов и дней сгенерированных дат
$months = array();
$days   = array();

// в этом цикле выводим на экран полученные даты (для проверки), заполняем массивы months  и days.
foreach ($date as $value) {
   
    $strData = date('d.m.Y', $value);
    echo $strData."</br>";
    
    $dateParse = date_parse($strData);  
 
    $months[] = $dateParse['month'];  
    $days[]   = $dateParse['day'];       
    
}


// определяем наибольший месяц, наименьший день.

array_multisort($months,SORT_DESC);
array_multisort($days);

echo "в массиве \$data наибольший месяц $months[0] </br>";
echo "в массиве \$data наименьший день  $days[0] </br>";        

// выводим дату в последнем элементе массива.
$selected = array_pop($date);
 echo date('d.m.Y H:i:s',$selected)."</br>";
 
 // выводим дату в часовом поясе Нью-йорка
 date_default_timezone_set('America/New_York');
 echo date('d.m.Y H:i:s',$selected)."</br>";
 
 
 




?>

