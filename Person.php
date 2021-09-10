<?php
class Person
{
    // Здоровье человека не ожет быть больше 100 ед
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }
    function sayHi($name)
    {
        return "Hi $name, I`m " . $this->name;
    }
    function setHP($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHP()
    {
        return $this->hp;
    }
    function getAge()
    {
        return $this->age;
    }
    function getName()
    {
        return $this->name;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getLastname()
    {
        return $this->lastname;
    }

    function getInfo()
    {
        return "<h3>Несколько слов обо мне и моей семье</h3>" . "Мое имя: " . $this->getName() . ";" . "<br>Моя фамилия: " . $this->getLastname() . ";" . "<br>Мой возраст: " . $this->getAge() . ";" .
            "<br><br><strong>Немного о папе:</strong>" . "<br>Имя моего папы: " . $this->getFather()->getName() . ";" . "<br>Фамилия моего папы: " . $this->getFather()->getLastname() . ";" . "<br>Возраст моего папы: " . $this->getFather()->getAge() . ";" .
            "<br><br><strong>Немного о маме:</strong>" . "<br>Имя моей мамы: " . $this->getMother()->getName() . ";" . "<br>Фамилия моей мамы: " . $this->getMother()->getLastname() . ";" . "<br>Возраст моей мамы: " . $this->getMother()->getAge() . ";" .
            "<br><br><strong>Немного о моем дедушке (по папиной линии):</strong>" . "<br>Имя дедушки по папе: " . $this->getFather()->getFather()->getName() . ";" . "<br>Фамилия дедушки по папе: " . $this->getFather()->getFather()->getLastname() . ";" . "<br>Возраст дедушки по папе: " . $this->getFather()->getFather()->getAge() . ";" .
            "<br><br><strong>Немного о моей бабушке (по папиной линии):</strong>" . "<br>Имя бабушки по папе: " . $this->getFather()->getMother()->getName() . ";" . "<br>Фамилия бабушки по папе: " . $this->getFather()->getMother()->getLastname() . ";" . "<br>Возраст бабушки по папе: " . $this->getFather()->getMother()->getAge() . ";" .
            "<br><br><strong>Немного о моем дедушке (по маминой линии):</strong>" . "<br>Имя дедушки по маме: " . $this->getMother()->getFather()->getName() . ";" . "<br>Фамилия дедушки по маме: " . $this->getMother()->getFather()->getLastname() . ";" . "<br>Возраст дедушки по маме: " . $this->getMother()->getFather()->getAge() . ";" .
            "<br><br><strong>Немного о моей бабушке (по маминой линии):</strong>" . "<br>Имя бабушки по маме: " . $this->getMother()->getMother()->getName() . ";" . "<br>Фамилия бабушки по маме: " . $this->getMother()->getMother()->getLastname() . ";" . "<br>Возраст бабушки по маме: " . $this->getMother()->getMother()->getAge() . ";" .
            "";
    }
}

/* Реализовать вывод на экран всех родственников, а именно - маму, ее возраст, папу, его возраст, дедушку по маминой линии, 
дедушку по папиной линн, аналогично по бабушке. Пример дал */

$semen = new Person("Semen", "Petrow", 64); //Папа мамы
$kate = new Person("Kete", "Petrova", 65); //Мама мамы

$vasiliy = new Person("Vasiliy", "Ivanov", 68); //Папа папы
$antonina = new Person("Antonina", "Ivanova", 69); //Мама папы

$alex = new Person("Alex", "Ivanov", 42, $antonina, $vasiliy); // Папа

$olga = new Person("Olga", "Ivanova", 42, $kate, $semen); // Мама
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex); // Я

echo $valera->getInfo();

//echo $valera->getMother->getName();
//echo $valera->getMother->getFather->getName();
/* $medkit = 50;
$alex->setHP(-30); //упал
echo $alex->getHP() . "<br>";
$alex->setHP($medkit); //нашел аптечку
echo $alex->getHP(); */
//echo $alex->sayHi($igor->name);
//echo $alex->name;
