<?
function NewBook($title, $author,$pages) {
    
    
   return $book = array('title'=>$title,'author'=>$author,'pages'=>$pages);
   
}

// задание 1
$name = 'Nikolay Shukshin';
$age = 32;

echo "My name is {$name}. </br>";
echo "I am $age years. </br>";

unset($name,$age);

//var_dump($name);
//var_dump($age);

// задание 2
define('SITY','Chita');

if(defined('SITY'))
    echo 'I live in '.SITY.'</br>';


define('SITY', 'NewYork');
//результат не удалось переопределить

// задание 3

$myLastBook = NewBook('\'Изучаем Java\'', '\'К. Сьерра, Б. Бейтс\'', 708);

echo 'Не давно я прочитал книгу '.$myLastBook['title'].
' написанную автором '.$myLastBook['author']. 
 ' я осилил '.$myLastBook['pages'].' страниц'."</br>";


 // задание 4
$books = array();
$books[0] = NewBook('\'Дама с собачкой\'','\'Чехов А.П.\'',80);
$books[1] = NewBook('\'Ронгалек\'','\'Фрай М.\'', 250);

$sumPages = $books[0]['pages']+ $books[1]['pages'];
//var_dump($books);
//echo $books[0]['title'];

echo 'Не давно я прочитал книги '.$books[0]['title'].' и '.$books[1]['title'].
' написаннные соответственно авторами '.$books[0]['author'].' и '.$books[1]['author']. 
 ' я осилил в сумме '.$sumPages.' страниц не ожидал от себя такого';
    
?>