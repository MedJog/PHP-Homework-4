<?php
// подключение файлов
require_once '../src/PhysicalBook.php';
require_once '../src/DigitalBook.php';
require_once '../src/AudioBook.php';
// пространство имен
use Library\PhysicalBook;
use Library\DigitalBook;
use Library\AudioBook;
// создание экземпляров классов
$physicalBook = new PhysicalBook("1984", "George Orwell", "Main Library");
$digitalBook = new DigitalBook("The Great Gatsby", "F. Scott Fitzgerald", "http://ebooks.com/gatsby");
$audioBook = new AudioBook("Becoming", "Michelle Obama", "Audible");

// вывод информации о книгах в консоль
echo $physicalBook->getDetails() . PHP_EOL;
echo $physicalBook->borrow() . PHP_EOL;
echo $physicalBook->getDetails() . PHP_EOL;

echo $digitalBook->getDetails() . PHP_EOL;
echo $digitalBook->borrow() . PHP_EOL;
echo $digitalBook->borrow() . PHP_EOL;
echo $digitalBook->borrow() . PHP_EOL;
echo $digitalBook->getDetails() . PHP_EOL;

echo $audioBook->getDetails() . PHP_EOL;
echo $audioBook->borrow() . PHP_EOL;
echo $audioBook->borrow() . PHP_EOL;
echo $audioBook->getDetails() . PHP_EOL;

// docker-compose up
