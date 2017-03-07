<?php
require_once 'Fibonacci.php';

$fibonacci = new Fibonacci();

$n = 10;

echo "<h1>Fibonacci simulando 10 termos</h1>";

echo "<h3>Versão Iterativa</h3>";
echo "<pre>";
print_r($fibonacci->iterativo($n));
echo "</pre>";

echo "<h3>Versão Recursiva</h3>";
echo "<pre>";
print_r($fibonacci->recursivo($n));
echo "</pre>";

echo "<h3>Versão Matricial</h3>";
echo "<pre>";
print_r($fibonacci->matricial($n));
echo "</pre>";