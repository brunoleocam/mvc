<?php
namespace Src\Class;

class ClassRender {

    #Atributos
    private $dir;
    private $title;
    private $description;
    private $keywords;

    #Getters e Setters Dir
    public function getDir() { return $this->dir; }
    public function setDir($dir) { $this->dir = $dir; return $this; }
    #Getters e Setters Title
    public function getTitle() { return $this->title; }
    public function setTitle($title) {  $this->title = $title; return $this; }
    #Getters e Setters Description
    public function getDescription() { return $this->description; }
    public function setDescription($description) { $this->description = $description; return $this; }
    #Getters e Setters Keywords
    public function getKeywords() { return $this->keywords; }
    public function setKeywords($keywords) { $this->keywords = $keywords; return $this; }

    #Método responsável por renderizar todo o layout da aplicação
    public function renderLayout(){
        include_once(DIRREQ."app/view/Layout.php");
    }

    #Adiciona caracteristicas especificas no head
    public function addHead(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Head.php");
        }
    }

    #Adiciona caracteristicas especificas no header
    public function addHeader(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Header.php");
        }
    }

    #Adiciona caracteristicas especificas no main
    public function addMain(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Main.php");
        }
    }

    #Adiciona caracteristicas especificas no footer
    public function addFooter(){
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Footer.php");
        }
    }

}