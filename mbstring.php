<?php

$string = "Testes de integração com PHP";

echo mb_strtoupper($string) . PHP_EOL; // Setando todos os caracteres caixa alta;

echo mb_strlen($string) . PHP_EOL; // Contagem de caracteres por numeração de bytes, 'mb' -> escapa caracteres acentuados;

echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL; // Usando Convert case para setar primeira letra de cara palavra em caixa alta;