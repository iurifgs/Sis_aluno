<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cruda</title>
    <link rel="stylesheet" href="../css/cruda.css">
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
    $cpf = $_GET["cpf"];
    $endereco = $_GET["endereco"];
    $datanascimento = $_GET["datanascimento"];
    


    ##codigo SQL
    $sql = "INSERT INTO professor(nome,idade,cpf,endereco,datanascimento) 
                VALUES('$nome','$idade','$cpf','$endereco','$datanascimento')";

    ##junta o codigo sql a conexao do banco
    $sqlcombanco = $conexao->prepare($sql);

    ##executa o sql no banco de dados
    if ($sqlcombanco->execute()) {
        echo " <strong>OK!</strong> o professor
                $nome foi Incluido com sucesso!!!";
        echo " <button class='button'><a href='proindex.php'>voltar</a></button>";
    }
}
#######alterar
if (isset($_POST['update'])) {

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $id = $_POST["id"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $datanascimento = $_POST["datanascimento"];


    ##codigo sql
    $sql = "UPDATE professor SET nome= :nome, idade= :idade, cpf= :cpf, endereco= :endereco, datanascimento= :datanascimento WHERE id= :id";

    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
    $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':datanascimento', $datanascimento, PDO::PARAM_STR);
   


    $stmt->execute();



    if ($stmt->execute()) {
        echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!";

        echo " <button class='button'><a href='proindex.php'>voltar</a></button>";
    }
}


##Excluir
if (isset($_GET['excluir'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if ($stmt->execute()) {
        echo " <strong>OK!</strong> o professor
             $id foi excluido!!!";

        echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
    }
}
