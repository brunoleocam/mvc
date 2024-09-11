<?php

// Define o tipo de conteúdo como HTML e o conjunto de caracteres como UTF-8
header("Content-Type: text/html; charset=utf-8");

// Inclui o arquivo de configuração, garantindo que ele seja incluído apenas uma vez
require_once("../config/config.php");

// Inclui o autoloader do Composer, garantindo que ele seja incluído apenas uma vez
require_once "../src/vendor/autoload.php";

use Src\Class\ClassRoutes;


// TESTES

// 1. 
    // use App\teste;
    // $teste = new teste();
    // echo "oi";

// 2. 
// echo DIRPAGE."<br>";
// echo DIRREQ."<br>";
// echo DIRIMG."<br>";

// 3. 
    // use \Src\Traits\TraitUrlParser;

    // class Teste {

    //     use TraitUrlParser;

    //     public function __construct() {
    //         $url=$this->parserUrl();
    //         var_dump($url);
    //     }
    // }
    // $new = new Teste();

// 4. 

    // Inclui o arquivo de rotas
    // use Src\Class\ClassRoutes;
    // $new = new ClassRoutes();
    // $teste = $new->getRota();
    // var_dump($teste);

// 5.

    // class Teste extends ClassRoutes {
    //     public function __construct() {
    //         $v = $this->getRota();
    //         var_dump($v);
    //     }
    // }

    // $new = new Teste();

// 6.
    // session_start();
    // $_SESSION['login'] = true;
    $Dispatch = new App\Dispatch();

// 7.

    // require_once(DIRREQ."app/view/Layout.php");

// 8.

    // $n = new Src\Class\ClassBreadcrumb();
    // $n->addBreadcrumb();

// 9.

    // $n = new App\Model\ClassConexao();
    // var_dump($n->conexaoDB());
