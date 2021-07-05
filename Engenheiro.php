<?php
class Engenheiro
{
    //Uma engenheiro tem nome, data de nascimento, CPF, 
    //RG e  CREA.A classe deve contemplar os 
    // Modificadores de acesso e os métodos Getters e Setters.

    private $nome;
    private $dataNascimento;
    private $cpf;
    private $rg;
    private $crea;

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this->nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this->dataNascimento;
    }
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this->cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this->rg;
    }
    public function getRg()
    {
        return $this->rg;
    }

    public function setCrea($crea)
    {
        $this->crea = $crea;
        return $this->crea;
    }
    public function getCrea()
    {
        return $this->crea;
    }
}