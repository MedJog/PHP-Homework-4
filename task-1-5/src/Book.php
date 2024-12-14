<?php
// пространство имен
namespace Library;

// абстрактный класс
abstract class Book {
    protected string $title;
    protected string $author;
    protected int $readCount = 0;
// конструктор
    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }
// метод для получения информации о книге
    public function getDetails(): string {
        return "Title: {$this->title}, Author: {$this->author}, Reads: {$this->readCount}";
    }
// счетчик прочтений книги
    public function incrementReadCount(): void {
        $this->readCount++;
    }
// метод получения книги на руки
    abstract public function borrow(): string;
}
