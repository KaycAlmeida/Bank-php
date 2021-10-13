<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    
    $caminhoArquivo = str_replace('Alura\\Banco', 'C:\Programas e Projetos\Alura\PHP (Arquivos)\Avançando com a Linguagem\src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});