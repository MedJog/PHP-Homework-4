<?php
// docker run --rm -v ${pwd}/task-6/:/cli php:8.2-cli php /cli/Task_6-1.php
class A {
  public function foo() {
    static $x = 0;
    echo ++$x;
    // echo static::class . ': исходное значение ' . $x . PHP_EOL;
    // echo static::class . ': новое значение ' . ++$x . PHP_EOL;
  }
  }
  class B extends A {
  }
  $a1 = new A();
  $b1 = new B();

  $a1->foo(); // 1
  $b1->foo(); // 2
  $a1->foo(); // 3
  $b1->foo(); // 4

  // метод foo() определён в классе A, статическая переменная $x "привязана" к классу A, даже если вызывается из объекта класса B.