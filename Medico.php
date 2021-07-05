<?php

// Uma médico tem nome, data de nascimento, CPF, RG e  
// CRM.A classe deve contemplar os modificadores de acesso 
// e os métodos Getters e Setters.

class Medico{
    private $nome;
    private $dataNascimento;
    private $cpf;
    private $rg;
    private $crm;

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

    public function setcrm($crm)
    {
        $this->crm = $crm;
        return $this->crm;
    }
    public function getcrm()
    {
        return $this->crm;
    }


}