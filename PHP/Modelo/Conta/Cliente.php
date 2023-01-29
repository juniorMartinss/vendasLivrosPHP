<?php
    namespace PHP\Modelo\Conta;//referenciando o projeto que estou usando

    require_once("Pessoa.php");

    //conectar o arquivo ao diretório
    use PHP\Modelo\Pessoa;
    
    class Cliente extends Pessoa{
        
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);//chama a classe a pessoa
        }//fim do construtor


    }//fim da classe pesso

?>
