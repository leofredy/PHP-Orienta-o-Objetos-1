<?php

function carregar(string $nomeCompleto): void
{
    $namespaceRaiz = "App\\";

    $diretorioBase = __DIR__ . '/../src/'; 

    $sizeNamespaceRaiz = strlen($namespaceRaiz);

    $namespaceRaizRecebido = substr($nomeCompleto, 0, $sizeNamespaceRaiz);
    if ($namespaceRaiz !== $namespaceRaizRecebido){
        return;
    }

    $caminhoRelativo = substr($nomeCompleto, $sizeNamespaceRaiz);
    
    $caminhoArquivo = $diretorioBase . str_replace('\\', '/', $caminhoRelativo) . '.php';

    if (file_exists($caminhoArquivo)){
        require $caminhoArquivo;
    }
}

spl_autoload_register("carregar");