<?php

require_once 'C:\Programas e Projetos\Alura\PHP (Arquivos)\Avançando com a Linguagem\src\autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

$endereco = new endereco('Petrópolis', 'um Bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta -> deposita(500);
$primeiraConta -> saca(300);

echo $primeiraConta -> recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta -> recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump ($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new CPF('123'), 'abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();