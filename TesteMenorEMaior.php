<?php
    require_once 'carrinho.php';
    require_once 'produto.php';
    require_once 'menorEMaior.php';

    class TesteMenorEMaior
    {
        public function realizaTeste()
        {
            $carrinho = new Carrinho();

            $carrinho -> adiciona(new Produto("Liquidificador",    250.00));
            $carrinho -> adiciona(new Produto("Geladeira",         850.00));
            $carrinho -> adiciona(new Produto("Panela de Pressão", 90.500));

            $menorEMaior = new MenorEMaior();
            $menorEMaior -> encontra($carrinho);

            echo "O menor produto: ";
            echo $menorEMaior -> getMenor() -> getNome() . PHP_EOL;
            echo "<br>O maior produto: ";
            echo $menorEMaior -> getMaior() -> getNome() . PHP_EOL;
        }
    }



    $teste = new TesteMenorEMaior();
    $teste -> realizaTeste();
?>