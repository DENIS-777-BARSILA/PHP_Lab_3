<?php

namespace App;


class MagicClass
{ 
    private $StaticField = [];

    public function __destruct() {
        echo "__destruct\n";
    }

    public function __construct() {
        echo "__construct\n";
    }

    public function __call($name, $arguments) {
        echo "__call\n";
    }

    public static function __callStatic($name, $arguments) {
        echo "__callStatic\n";
    }

    public function __get($name) {
        echo "__get\n";
    }

    public function __set($name, $value) {
        echo "__set\n";
    }

    public function __isset($name) {
        echo "__isset\n";
    }

    public function __unset($name) {
        echo "__unset\n";
    }

    public function __sleep() {
        echo "__sleep\n";
        return [];
    }

    public function __wakeup() {
        echo "__wakeup\n";
    }

    public function __serialize() {
        echo "__serialize\n";
        return [];
    }

    public function __unserialize(array $data) {
        echo "__unserialize\n";
    }

    public function __toString() {
        echo "__toString\n";
        return "string";
    }

    public function __invoke($param) {
        echo "__invoke\n";
    }

    public static function __set_state($properties) {
        echo "__set_state\n";
    }

    public function __clone() {
        echo "__clone\n";
    }

    public function __debugInfo() {
        echo "__debagInfo\n";
        return [];
    }
}
