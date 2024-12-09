<?php

    namespace App\Model;

    use App\Model\TelefoneModel;

    abstract class PessoaModel extends Model
    {

        private $nome;

        private $telefones;

        public function __construct(string $nome = "")
        {

            $this->nome = $nome;
            
        }

        // GET e SET.

        public function GET_Nome() : string { return $this->nome; }

        public function GET_Telefones() : array { return $this->telefones; }

        public function SET_Nome(string $parametro) : void { $this->nome = $parametro; }

        public function SET_Telefones(TelefoneModel $parametro) : void { $this->telefones[] = $parametro; }

    }

?>