<?php

namespace App;


class MagicClass
{
    public function __destruct() {
        echo "__construct\n";
    }

    public function __construct() {
        echo "__destruct\n";
    }

    public function __call() {
        echo "__call\n";
    }

    public function __callStatic() {
        echo "__callStatic\n";
    }

    public function __get() {
        echo "__get\n";
    }

    public function __set() {
        echo "__set\n";
    }

    public function __isset() {
        echo "__isset\n";
    }

    public function __unset() {
        echo "__unset\n";
    }

    public function __sleep() {
        echo "__sleep\n";
    }

    public function __wakeup() {
        echo "__wakeup\n";
    }

    public function __serialize() {
        echo "__serialize\n";
    }

    public function __unserialize() {
        echo "__unserialize\n";
    }

    public function __toString() {
        echo "__toString\n";
    }

    public function __invoke() {
        echo "__invoke\n";
    }

    public function __set_state() {
        echo "__set_state\n";
    }

    public function __clone() {
        echo "__clone\n";
    }

    public function __debagInfo() {
        echo "__debagInfo\n";
    }
}
