<?php
// пространство имен
namespace Library;
// подключение файла
require_once 'Book.php';
// класс-наследник от Book для цифровых книг
class DigitalBook extends Book {
    private string $downloadLink;

    public function __construct(string $title, string $author, string $downloadLink) {
        parent::__construct($title, $author); // свойства общие с родительским классом
        $this->downloadLink = $downloadLink; // собственное свойство
    }
// переопределённый метод получения книги - ссылка для скачивания
    public function borrow(): string {
         // при получении книги "на руки" увеличивается счетчик прочтения книг
        $this->incrementReadCount();
        return "Download this book at: {$this->downloadLink}";
    }
}
