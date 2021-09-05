
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<?php 
// aki começa a bronca kkkk
  require_once('./Model/Aluno.php');//instanciando as classes e funçoes relacionadas a aluno
  require_once('./Model/Turma.php');//instanciando as classes e funçoes relacionadas a turma
  
  $aluno1 = new Aluno();//primeiro objeto aluno que vai para metodo construtor da Aluno.php
  $aluno1->adicionarDados("Maria Joaquina", "123456789", 7.7, 8.1, 8, 10);

  $aluno2 = new Aluno();
  $aluno2->adicionarDados("João Antenor", "665640789", 90, 80, 60, 55);

  $aluno3 = new Aluno();
  $aluno3->adicionarDados("Marcos Luiz", "128790589", 75, 90, 80, 35);

  $aluno4 = new Aluno();
  $aluno4->adicionarDados("Teófilo", "1236506506", 90, 75, 80, 55);

  $aluno5 = new Aluno();
  $aluno5->adicionarDados("Jurandir", "16509806789", 45, 80, 85, 65);

  $aluno6 = new Aluno();
  $aluno6->adicionarDados("Aluno que não é para adicionar", "16509806789", 45, 8.0, 85, 65);
  //ultimo objeto aluno para mostrar que o codigo n permite mais de 5. e tmbm vai para o metodo construtor

  $arrayAlunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5, $aluno6];//array aluno rebendo os valores

  $turma = new Turma('Matemática');//recebe objeto Turma 

  foreach($arrayAlunos as $aluno) {//aki arrayAlunos recebe nome $aluno
    $turma->adicionarAluno($aluno);//aponta para 12 Turma.php 
  }

  $turma->getNome();// aponta para turma.php linha 
    ?>
  <h1>Controle de notas de Turma</h1>
  <h1>Notas dos alunos da turma de <?=$turma->getNome()?></h1>
  <?php $turma->imprimirTurma(); ?>
 

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>



