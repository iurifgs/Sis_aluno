<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crudaluno</title>
    <link rel="stylesheet" href="../css/crualuno.css">
</head>
<body>
    
</body>
</html>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if (isset($_GET['cadastrar'])) {
    ##dados recebidos pelo metodo GET
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $datanascimento = $_GET["datanascimento"];
    $endereco = $_GET["endereco"];
    $matricula = $_GET["matricula"];
    

    ##codigo SQL
    $sql = "INSERT INTO aluno(nome,idade,datanascimento,endereco,matricula) 
                VALUES('$nome','$idade','$datanascimento','$endereco','$matricula')";

    ##junta o codigo sql a conexao do banco
    $sqlcombanco = $conexao->prepare($sql);

    ##executa o sql no banco de dados
    if ($sqlcombanco->execute()) {
        echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!";
        echo " <button class='button'><a href='index.php'>voltar</a></button>";
    }
}
#######alterar
if (isset($_POST['update'])) {

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $matricula = $_POST["matricula"];
    $idaluno = $_POST["idaluno"];


    ##codigo sql
    $sql = "UPDATE aluno SET nome= :nome, idade= :idade, datanascimento= :datanascimento, endereco= :endereco, matricula= :matricula WHERE idaluno= :idaluno ";

    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':idaluno', $idaluno, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento', $datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':matricula', $matricula, PDO::PARAM_STR);
   

    $stmt->execute();


    if ($stmt->execute()) {
        echo " <strong>OK!</strong> o aluno
                 $nome foi Alterado com sucesso!!!";
        echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
    }
}


##Excluir
if (isset($_GET['excluir'])) {
    $idaluno = $_GET['idaluno'];
    $sql = "DELETE FROM `aluno` WHERE idaluno={$idaluno}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if ($stmt->execute()) {
        echo " <strong>OK!</strong> o aluno
             $idaluno foi excluido!!!";
        echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
    }
}
