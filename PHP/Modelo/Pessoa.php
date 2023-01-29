<?php
    namespace PHP\Modelo;

    class Pessoa{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private Endereco $endereco;
        //inserir variável que representa Endereço

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        //métodos gets e sets

        public function getCpf() : string
        {
            return $this->cpf;
        }//fim do getCPF

        public function setCpf(string $cpf) : void
        {
            $this->cpf = $cpf;
        }//fim do setCpf

        public function getNome() : string
        {
            return $this->nome;
        }//fim do getNome

        public function setNome(string $nome) : void
        {
            $this->nome = $nome;
        }//fim do setNome

        public function getTelefone() : string
        {
            return $this->telefone;
        }//fim do getTelefone

        public function setTelefone(string $telefone) : void
        {
            $this->telefone = $nome;
        }//fim do setTelefone

    }//fim da classe pessoa


?>