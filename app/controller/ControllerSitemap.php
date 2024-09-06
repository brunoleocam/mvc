<?php

namespace App\Controller;

class ControllerSitemap {
    
    // public function __construct() {
    //     echo "Controller Sitemap";
    // }

    public function testeMetodo() {
        echo "Esse método realmente existe!";
    }

    public function testeMetodo2() {
        echo "Esse método também existe!";
    }

    public function testeMetodo3($Par1, $Par2, $Par3) {
        echo "O parâmetro 1 é <strong>{$Par1}</strong><br>";
        echo "O parâmetro 2 é <strong>{$Par2}</strong><br>";
        echo "O parâmetro 3 é <strong>{$Par3}</strong><br>";
    }
}