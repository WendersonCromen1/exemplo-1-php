<?php
class Vendas{
    public $valor;
    public $produtos;
    public $numProd=0;

    function CalcularVendas(){
        $this->valor=0;
        for ($i=0; $i<$this->numProd; $i++){
            echo $this->valor+=$this->produtos[$i]->valorTotal . "</br>";
        }
    }

    function Imprimir(){
        echo "Valor da venda: " . $this->valor . "</br>";
        for ($i=0; $i<$this->numProd; $i++){
            echo " -Produto" . $this->produtos[$i]->nome . 
            " -Valor da unidade" . $this->produtos[$i]->valor.
            " -Quantidade" . $this->produtos[$i]->quantidade .
            " -Valor Total" . $this->produtos[$i]->valorTotal . "</br>";
        }
    }

    public function GerarProdutos(){
        $p1 = new Produtos();
        $p1->id=1;
        $p1->nome="notebook";
        $p1->valor=1000;
        $p1->quantidade=3;
        $this->numProd++;
        $p1->Calcular();

        $p2 = new Produtos();
        $p2->id=2;
        $p2->nome="XBOX360";
        $p2->valor=2000;
        $p2->quantidade=3;
        $this->numProd++;
        $p2->Calcular();

        $p3 = new Produtos();
        $p3->id=3;
        $p3->nome="PS5";
        $p3->valor=3000;
        $p3->quantidade=3;
        $this->numProd++;
        $p3->Calcular();

        $p4 = new Produtos();
        $p4->id=3;
        $p4->nome="PS5";
        $p4->valor=3000;
        $p4->quantidade=3;
        $this->numProd++;
        $p4->Calcular();

        $this->produtos[0] = $p1;
        $this->produtos[1] = $p2;
        $this->produtos[2] = $p3;
        $this->produtos[3] = $p4;
    }
}
?>