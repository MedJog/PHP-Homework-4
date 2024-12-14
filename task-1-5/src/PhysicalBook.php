<?php
// пространство имен
namespace Library;
// подключение файла
require_once 'Book.php';
// класс-наследник от Book  для бумажных книг
class PhysicalBook extends Book {
    private string $libraryAddress;

    public function __construct(string $title, string $author, string $libraryAddress) {
        parent::__construct($title, $author); // свойства общие с родительским классом
        $this->libraryAddress = $libraryAddress; // собственное свойство, отличное от родительского - адрес получения книги
    }
// переопределённый метод получения книги
    public function borrow(): string {
        // при получении книги "на руки" увеличивается счетчик прочтения книг
        $this->incrementReadCount();
        return "You can borrow this book at: {$this->libraryAddress}";
    }
}
