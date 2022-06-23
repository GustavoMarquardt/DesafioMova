<?php

class Pessoa
{

    private string $nome;
    private string $genero;
    private int $idade;
    private string $tipoSanguineo;
    private int $peso;
    private float $altura;


    public function __construct(
        string $nome,
        string $genero,
        int $idade,
        string $tipoSanguineo,
        int $peso,
        float $altura
    ) {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->idade = $idade;
        $this->tipoSanguineo = $tipoSanguineo;
        $this->peso = $peso;
        $this->altura = $altura;
       
    }
        //geters
    public function pegaNome()
    {
        return $this->nome;
    }

    public function pegaGenero()
    {
        return $this->genero;
    }

    public function pegaIdade()
    {
        return $this->idade;
    }

    public function pegaTipoSanguineo()
    {
        return $this->tipoSanguineo;
    }

    public function pegaPeso()
    {
        return $this->peso;
    }

    public function pegaAltura()
    {
        return $this->altura;
    }
}
