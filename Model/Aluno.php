<?php
//aki a classe com atributos e metodos sem metodo construtor porque???
//basicamente 1-recebe nomes e notas e retorna para outro lugar
  class Aluno {
    protected $nome;//atributos ou base para o que vem a seguir
    protected $ra;
    protected $nota1;
    protected $nota2;
    protected $nota3;
    protected $nota4;

    public function adicionarDados($nome, $ra, $nota1, $nota2, $nota3, $nota4) {//aki recebe os dados do arrayAlunos
      $this->nome = $nome;//aki cada atributo com os valores e vai para linha 8 do arq turma.php
      $this->ra = $ra;
      $this->nota1 = $nota1;
      $this->nota2 = $nota2;
      $this->nota3 = $nota3;
      $this->nota4 = $nota4;
    }

    public function getMedia() {// daqui será instanciada para turma.php linha 59 onde será feita 
      return ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;//aki onde é capturado as notas e estas são somadas e divididas
    }//

    public function getNome() {
      return $this->nome;//aki o nome é recebido 
    }

    public function getNota1() {
      return $this->nota1;//aki o nota é recebida
    }
    public function getNota2() {
      return $this->nota2;
    }
    public function getNota3() {
      return $this->nota3;
    }
    public function getNota4() {
      return $this->nota4;
    }

    
  }
?>