<?php
class Pessoa
{
    //Uma pessoa tem nome, data 
    //de nascimento, CPF e RG.
    public $nome;
    public $dataNascimento;
    public $cpf;
    public $rg;


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
    




}