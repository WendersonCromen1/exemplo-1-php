<?php
include("Produtos.php");
include("Vendas.php");

$venda = new Vendas();
$venda->GerarProdutos();
$venda->CalcularVendas();

echo "</br>";
echo $venda->Imprimir();
?>