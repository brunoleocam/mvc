<?php
#Arquivos diretórios raízes
$PastaInterna="mvc/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1) == '/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios específicos
define('DIRIMG',DIRPAGE."/public/img/");
define('DIRCSS',DIRPAGE."/public/css/");
define('DIRJS',DIRPAGE."/public/js/");
define('DIRFONT',DIRPAGE."/public/font/");
define('DIRAUDIO',DIRPAGE."/public/audio/");
define('DIRVIDEO',DIRPAGE."/public/video/");

#Acesso ao banco de dados
define('HOST',"localhost");
define('DB',"mvc");
define('USER',"root");
define('PASS',"");

