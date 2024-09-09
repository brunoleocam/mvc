<?php
namespace Src\Class;

use Src\Traits\TraitUrlParser;

/**
 * Class ClassRoutes
 * 
 * Esta classe é responsável por gerenciar as rotas da aplicação.
 */
class ClassRoutes {
    
    use TraitUrlParser;

    /**
     * @var array $Rota Armazena as rotas disponíveis e seus respectivos controladores.
     */
    private $Rota;

    /**
     * Método para obter a rota correspondente à URL.
     * 
     * Este método utiliza o trait TraitUrlParser para analisar a URL e determinar
     * qual controlador deve ser chamado com base na primeira parte da URL.
     * 
     * @return string O nome do controlador correspondente à rota.
     */
    public function getRota() {
        // Analisa a URL e obtém a primeira parte
        $Url = $this->parserUrl();
        $I = $Url[0];

        // Define as rotas disponíveis e seus respectivos controladores
        $this->Rota = array(
            "" => "ControllerHome",
            "home" => "ControllerHome",
            "sitemap" => "ControllerSitemap",
            "sobre" => "ControllerSobre",
            "servicos" => "ControllerServicos",
            "contato" => "ControllerContato",
            "carros" => "ControllerCarros",
        );

        // Verifica se a rota existe no array de rotas
        if (array_key_exists($I, $this->Rota)) {
            // Verifica se o arquivo do controlador existe
            if (file_exists(DIRREQ . "app/controller/{$this->Rota[$I]}.php")) {
                return $this->Rota[$I];
            } else {
                return "ControllerHome";
            }
        } else {
            return "ControllerHome";
        }
    }
}
