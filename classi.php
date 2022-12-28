<?php

class A {							//esercizio 10.3
public function f1() { return "uno"; }
public function f2() { return "due"; }
}


public class B extends A {
public function f2() { return "tre"; }
public function f3() { return "quattro"; }

}
p = new A();
q = new B();
s = f1->f3;
echo(s);