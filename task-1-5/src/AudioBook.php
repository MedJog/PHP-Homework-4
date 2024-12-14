<?php
// пространство имен
namespace Library;
// подключение файла
require_once 'Book.php';
// класс-наследник от Book для аудиокниг
class AudioBook extends Book {
    private string $audioService;

    public function __construct(string $title, string $author, string $audioService) {
        parent::__construct($title, $author); // свойства общие с родительским классом
        $this->audioService = $audioService; // собственное свойство
    }
// переопределённый метод получения книги - название аудиосервиса
    public function borrow(): string {
         // при получении книги "на руки" увеличивается счетчик прочтения книг
        $this->incrementReadCount();
        return "Listen to this audiobook on: {$this->audioService}";
    }
}
