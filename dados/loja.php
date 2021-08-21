<?php 

    function produto($index = -1){
        $prod1 = ['id' => '0', 'img' => 'blusa1.jpg', 'nome' => 'Blusa jeans',
            'desc' => 'Blusa descolada', 'preco' => '89.99'];
        $prod2 = ['id' => '1', 'img' => 'calca1.jpg', 'nome' => 'Calça moleton',
            'desc' => 'Calça boa para exercícios', 'preco' => '99.99'];
        $prod3 = ['id' => '2', 'img' => 'regata1.jpg', 'nome' => 'Regata',
            'desc' => 'Regata para aqueles rolês no verão', 'preco' => '79.99'];
        $prod4 = ['id' => '3', 'img' => 'cachecol1.jpg', 'nome' => 'Cachecol',
            'desc' => 'Cachecol bom para o frio', 'preco' => '49.99'];
        $produtos = [$prod1, $prod2, $prod3, $prod4];
        return $index == -1 ? $produtos : $produtos[$index];
    }