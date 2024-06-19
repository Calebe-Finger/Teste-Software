<?php
    require_once 'Produto.php';
    
    class Carrinho
    {
        private $produtos;

        public function __construct()
        {
            $this -> produtos = array();
        }

        public function adiciona(Produto $produto)
        {
            $this -> produtos[] = $produto;
        }

        public function getProdutos()
        {
            return $this -> produtos;
        }
    }
?>