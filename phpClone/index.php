<?php

/* 
 * В PHP объекты всегда используются по ссылке. Мы знаем, что параметры, доступные внутри функции,
 *  являются копиями переданных значений. Но если вы создадите новый объект и передадите в функцию,
 *  он не будет скопирован. Все вызовы методов и изменения свойств, примененные к параметру, 
 * будут отражены на реальный объект, существующий за пределами функции.

Такое поведение связано с внутренними процессами оптимизации PHP интерпретатора.
 *  Копировать объекты очень накладно, с точки зрения потребления ресурсов системы.
 */

//Создаем простой класс "Книга"
class Book
{
    //закрытое свойство названия
    private $title = 'Мастер и Маргарита';

    //Метод установки нового названия
    public function setTitle($newTitle)
    {
        $this->title = $newTitle;
    }

    //Метод получения названия книги
    public function getTitle()
    {
        return $this->title;
    }
}

//Функция изменения названия книги
function changeBookName($bookObject)
{
    $bookObject->setTitle('Новое название');
}


//Создаем объект и проводим эксперимент
$book = new Book();
echo $book->getTitle(); //Результат: Мастер и Маргарита
echo "<br>";

changeBookName($book);
echo $book->getTitle(); //Результат: Новое название
echo "<br>";

//Создаем новый объект и клонируем его
$origin = new Book();
$clone = clone $origin;

//Клон имеет тоже состояние что и оригинал
echo $origin->getTitle(); //Результат: Мастер и Маргарита
echo "<br>";
echo $clone->getTitle(); //Результат: Мастер и Маргарита
echo "<br>";

//Меняем название книги клона
$clone->setTitle('Война и мир');
echo $origin->getTitle(); //Результат: Мастер и Маргарита
echo "<br>";
echo $clone->getTitle(); //Результат: Война и мир
echo "<br>";

/*/!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Нужно отметить, что клонирование объектов в PHP относится к одной из редко используемых операций.
 *  Её повсеместное применение может вызвать снижение производительности программы.
 *  Это, безусловно, удобный инструмент, но использовать его нужно по необходимости.
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/

//                           Волшебный метод __clone()
//
//Класс может определить реализацию специального метода __clone(). 
//Он работает как конструктор клонируемого объекта.
//Единственное его отличие от реального конструктора в том, что он не может принимать параметры.
//        Обратите внимание, что имя метода содержит два нижних подчеркивания.
//
//Принцип действия волшебного метода __clone() очень прост.
//Если он определен в классе, PHP вызовет его автоматически для клонированного объекта. 
//Это может быть необходимо при изменении его состояния. 
//Например, если вы хотите, чтобы копия объекта немного отличалась от оригинала.

//Создаем простой класс "Студент университета"

class Student
{
    //Свойства имени, фамилии и возраста
    public $name, $surname, $age;

    //Конструктор инициализирует свойства
    public function __construct($name, $surname, $age)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->age = $age;
    }

    //Метод обнуляет значение свойств клона
    public function __clone()
    {
        $this->surname = 'Неизвестно...';
        $this->name = 'Неизвестно...';
        $this->age = 'Неизвестно...';
    }

    //Вывод информации о студенте в браузер
    public function getInfo()
    {
        echo 'Информация о студенте<br>';
        echo "Имя: {$this->name}<br>";
        echo "Фамилия: {$this->surname}<br>";
        echo "Возраст: {$this->age}<br>";
    }
}

//Создаем новый объект студента, заполняем его
//свойства, а затем клонируем
$student = new Student('Денис', 'Демидов', 20);
$student->getInfo();
/*
* Результат:
* Информация о студенте
* Имя: Денис
* Фамилия: Демидов
* Возраст: 20
*/

$clone = clone $student;
$clone->getInfo();/*
* Результат:
* Информация о студенте
* Имя: Неизвестно...
* Фамилия: Неизвестно...
* Возраст: Неизвестно...
*/