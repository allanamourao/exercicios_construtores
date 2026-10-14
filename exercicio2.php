<?php
class Aluno{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    // Método construtor
    public function __construct($valor1, $valor2, $valor3){
        $this->nome = $valor1;
        $this->nota1 = $valor2;
        $this->nota2 = $valor3;

        $this->media = $this->media();
    }
    // Método para calcular
    public function media(){
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$aluno1 = new Aluno("Allana", 10.0, 07.5);

echo "<pre>";
print_r($aluno1);
echo "</pre>";
?>