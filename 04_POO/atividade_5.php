<?php

    class Livro {
        public $titulo;
        public $autor;
        public $paginas;
        public $ano_publicacao;

        public function __construct($titulo,$autor,$paginas,$ano_publicacao = "Desconhecido"){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->paginas = $paginas;
            $this->ano_publicacao = $ano_publicacao;

        }

        public function exibirDetalhes(){
            echo "Título: $this->titulo, Autor: $this->autor, Páginas: $this->paginas, Ano de Publicação: $this->ano_publicacao";
        }
    }

    $livro1 = new Livro("Incipt", "Leonor de Carvalho", 556, 2023);
    $livro1->exibirDetalhes();
    echo "<hr>";
    $livro2 = new Livro("Hipótese do Amor", "Ali Hazelwood", 336);
    $livro2->exibirDetalhes();


