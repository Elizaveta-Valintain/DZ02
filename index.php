<?php
/**
 * Created by PhpStorm.
 * User: Boss
 * Date: 21.11.2016
 * Time: 11:31
 */

/*
05.11.2016	Домашнее задание от 05.11.2016	29.10_РНР(Т+О+У)_Сб(10:00-14:00)_Виктор	Александр Костылев

1. Создайте переменную name и присвойте ей значение, содержащее ваше имя, например "Иннокентий".
2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.
3. Выведите с помощью echo фразу "Меня зовут: %ваше_имя%", например: "Меня зовут: Иннокентий".
4. Выведите фразу "Мне %ваш_возраст% лет", например: "Мне 20 лет".
5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значние переменной age попадает в диапазон чисел от 18 до 59 (включительно).
6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.
7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).
8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.
9. Создайте переменную day и присвойте ей произвольное числовое значение.
10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).
11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).
12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).
13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.
14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10, используя только переменную $foo (не опечатка).
15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления). На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.
17. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на равность, с помощью if выведите "равны" или "не равны".
18. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".
19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.
20. Приведите число 20 к типу boolean. Объясните результат.
21. Приведите число 0 к типу boolean. Объясните результат.
22. Приведите число -20 к типу boolean. Объясните результат.
23. Напишите 3 строки, используя три разные функции для вывода текста.
24. Создайте в файле 3 комментария тремя разными типами.
25. Приведите пример, чем отличается <?php от <?=.
26. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 двумя разными способами объявления констант.
27. Выполните скрипт по задаче №4 из консоли (необходимо запустить php скрипт по задаче №4 из командной строки).
*/



//1
$name = 'Иннокентий';

//2
$age = 35;

//3
echo "п.3"."<br>";
echo "Меня зовут: ".$name."<br>";

//4
echo "п.4"."<br>";
echo "Мне ".$age." лет."."<br>";

//5
echo "п.5"."<br>";
 if (($age >= 18) and ($age <=59)) {
	echo "Вам еще работать и работать"."<br>";
}

//6
echo "п.6"."<br>";
if (($age >= 18) and ($age <=59)) {
	echo "Вам еще работать и работать"."<br>";
} elseif ($age > 59){
	echo "Вам пора на пенсию"."<br>";
}

//7,8
echo "п.7"."<br>";
if (!is_int($age) or ($age < 0)) {
	echo "Неизвестный возраст"."<br>";
} elseif (($age >= 18) and ($age <=59)) {
	echo "Вам еще работать и работать"."<br>";
} elseif ($age > 59){
	echo "Вам пора на пенсию"."<br>";
} elseif (($age >=0) and ($age <=17)) {
	echo "Вам еще рано работать"."<br>";
}


//9,10,11,12
$day = 10;

switch ($day){
	 case 1 : echo "Это рабочий день"; break;
	 case 2 : echo "Это рабочий день"; break;
	 case 3 : echo "Это рабочий день"; break;
	 case 4 : echo "Это рабочий день"; break;
	 case 5 : echo "Это рабочий день"; break;
	 case 6 : echo "Это выходной день"; break;
	 case 7 : echo "Это выходной день"; break;
	default: echo "Неизвестный день";
}


//13
$s = 180000;//метры
$t = 3;//час

echo "<br>";
echo $s / ($t*60*60) ." метров/сек"."<br>";
echo ($s/1000) / ($t) ." км/ч";

//14
echo "<br>";
$foo = 'bar';
$bar = 10;
print_r($$foo.'<br>');


//15
$a = 10;
$b = 0;
$operator = '/';
//$operator = ‘+’, ‘-’, ‘/’, ‘*’, '%'
echo 'п.15'."<br>";
switch ($operator){
	case '+' :
		echo $a + $b;
		break;
	case '-' :
		echo $a - $b;
		break;
	case '*' :
		echo $a * $b;
		break;
	case '/' :
		 if ($b != 0) {
			 echo $a / $b;
			 break;
		 }
			 echo "<b>Error:</b> На ноль делить нельзя";
		     break;
	case '%' :
		echo $a % $b;
		break;
	default: echo "Неизвестный оператор";
}

//16
echo "<br>".'п.16'."<br>";
$a = 101;
$b = 10;

$a > $b ? print_r($a) : print_r($b);

//17
$a = '78';
$b = 78;

echo "<br>";
if ($a == $b) {
	echo "Равны"."<br>";
} else {
	echo "НЕ Равны"."<br>";
}

//18
$a = '78';
$b = 78;

echo "<br>";
if ($a === $b) {
	echo "эквивалентны"."<br>";
} else {
	echo "НЕ эквивалентны"."<br>";
}


//19
$a = '78';
$b = 78;
echo "<br>";
if ($a == $b) {
	var_dump($a);//"эквивалентны"
} else {
	var_dump($b);//"НЕ эквивалентны"
}

//20,21,22
echo "<br>";
echo "(bool)20 : ".(bool)20;
echo "<br>";
//echo "(bool)0 : ".(bool)0;
var_dump((bool)0);
echo "<br>";
echo "(bool)-20 : ".(bool)-20;
echo "<br>";
/*Приведение к логическому типу. Приведение числовых значений к логическим осуществляется по следующему правилу: результатом будет false, если исходное значение было 0. В остальных случаях результатом будет true*/


//23
$a = 10;
var_dump($a);
echo "<br>";
echo $a."<br>";
print_r($a."<br>");
print $a."<br>";
printf($a."<br>");


//24
//Comment line

/*
 * Comment block
 * */

# Comment
# 1
# 2


//25

/*
 * <?php - открывающий тег блока PHP
 * ?> - закрывающий тег
 *
 * * <?= - не нашел информации по тегу
 * */


//26
define('DAYS_COUNT', 7);
const MONTH_COUNT = 12;

echo DAYS_COUNT."<br>";
echo MONTH_COUNT;


/*27. Выполните скрипт по задаче №4 из консоли (необходимо запустить php скрипт по задаче №4 из командной строки).
