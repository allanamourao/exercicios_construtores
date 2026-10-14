<?php
class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anoPublicacao;

    // Método construtor
    public function __construct($valor1, $valor2, $valor3, $valor4 = 'Desconhecido'){
        $this->titulo = $valor1;
        $this->autor = $valor2;
        $this->paginas = $valor3;
        $this->anoPublicacao = $valor4;
    }
    // Método para exibir
    public function exibirDetalhes(){
        echo "Título: " . $this->titulo . ",";
        echo "Autor: " . $this->autor . ",";
        echo "Páginas: " . $this->paginas . ".";
        echo "Publicado em: " . $this->anoPublicacao;
        echo "<br>";
    }
}

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, "1899");
$livro2 = new Livro("Harry Potter e a Pedra Filosofal", "J. K. Rowling", "208");

$livro1->exibirDetalhes();
$livro2->exibirDetalhes();
?>