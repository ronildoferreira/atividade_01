<?php
// aki fazemos a gestão da turma e mecanica dos dados
  class Turma {
    protected $alunos;                          //este será acessivel por set e get na pagina Aluno.php
    private $nomeTurma;                         //este será acessivel só dentro da funçao
    private $qtdAluno = 0;

    public function __construct($nome) {         //metodo construtor gerado apartir de um objeto criado
      $this->nomeTurma = $nome;                //recebe os dados de arq aluno linha 11
    }

    public function adicionarAluno(Aluno $aluno) {// ligado a index.php linha 42
      if($this->qtdAluno <= 4 ) {               // se qtdAluno for menor ou igual a 4 o alunos receberá aluno e printará (o aluno "$aluno" foi inserido com sucesso) e
                                                // seguirá imprimindo todos na sequência
        $this->alunos[$this->qtdAluno] =  $aluno;  //recebe dados de linha 42 do index.php
        echo 'O aluno '.$aluno->getNome().' foi inserido com sucesso na turma </br>';
        $this->qtdAluno++;
        // var_dump($aluno);
      } else {                                //quando passar de 4 "a turma  está cheia"
        echo "A turma já está cheia";
      }
    }
                                              // agora começa a parte 2 na tela 

    public function imprimirTurma() {
      echo 'A média da turma é: '.$this->mediaTurma();

      foreach($this->alunos as $aluno) {
      echo "
      <h2>".$aluno->getNome()."</h2>
      <table class='table table-hover'>
        <thead>
          <tr>
            <th scope='col'>Nota 1</th>
            <th scope='col'>Nota 2</th>
            <th scope='col'>Nota 3</th>
            <th scope='col'>Nota 4</th>
            <th scope='col'>Média</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>".$aluno->getNota1()."</td>
            <td>".$aluno->getNota2()."</td>
            <td>".$aluno->getNota3()."</td>
            <td>".$aluno->getNota4()."</td>
            <td>".$aluno->getMedia()."</td>
          </tr>
        </tbody>
      </table>
      </br>
      </br>";
      }
    }
  
    public function mediaTurma() {
      $notas = 0;
      for($i = 0; $i < sizeof($this->alunos); $i++) {
        $notas += $this->alunos[$i]->getMedia();       //aki notas recebe media de aluno.php linha 20 
                                                       //e passa cada uma no loop for e
      }
      return $mediaTurma = $notas / sizeof($this->alunos);//mediaTurma recebe um count == a sizeof 
    }
    
    public function getNome() {
      return $this->nomeTurma;
    }

  }

?>