<?php   
    require_once "Usuario.php";

    class Professor extends Usuario {
        private $disciplina;

        public function __construct($nome, $email ,$disciplina){
            parent::__construct($nome, $email);
            $this->disciplina = $disciplina;
        }

        public function getDisciplina(){
            return $this->disciplina;
        }

        public function exibirInfo(){
            return parent::exibirInfo(). "| Disciplina: {$this->disciplina}.";
        }

        public function darAula(){
            return "{$this->nome} está dando aula de {$this->disciplina}";
        }  
    }