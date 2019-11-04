<?php
$value = isset($_POST['answer']) ? trim($_POST['answer']) : '';
//var_dump($value);
$a = 0;
$b = 0;
$c = 0;
switch ($value){
    case a1 :
        echo 'Вы истенный Харьковчанин  ' ;
        break;
    case a2 :
        echo  'Вы не расскрыли для себя Харьков ' ;
        break;
    case a3 :
        echo  'Вы можете ознакомится с городом перейдя по ссылке' ;
        break;
    case "" :
        echo 'Сделайте свой выбор';
        break;
}




