<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crudadis</title>
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
    $dis = $_GET["disciplina"];
    $ch = $_GET["ch"];
    $semestre = $_GET["semestre"];
    $idprofessor = $_GET["idprofessor"];
    


    ##codigo SQL
    $sql = "INSERT INTO disciplina (disciplina,ch,semestre,idprofessor) 
                VALUES('$dis','$ch','$semestre','$idprofessor')";

    ##junta o codigo sql a conexao do banco
    $sqlcombanco = $conexao->prepare($sql);

    ##executa o sql no banco de dados
    if ($sqlcombanco->execute()) {
        echo " <strong>OK!</strong> a disciplina
                $dis foi Incluido com sucesso!!!";
        echo " <button class='button'><a href='discindex.php'>voltar</a></button>";
    }
}
#######alterar
if (isset($_POST['update'])) {

    ##dados recebidos pelo metodo POST
    $dis = $_POST["disciplina"];
    $ch = $_POST["ch"];
    $iddisciplina = $_POST["iddisciplina"];
    $semestre = $_POST["semestre"];
    $idprofessor = $_POST["idprofessor"];
  

    ##codigo sql
    $sql = "UPDATE disciplina SET disciplina= :disciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE iddisciplina= :iddisciplina";

    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':disciplina', $dis, PDO::PARAM_STR);
    $stmt->bindParam(':ch', $ch, PDO::PARAM_STR);
    $stmt->bindParam(':semestre', $semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor', $idprofessor, PDO::PARAM_INT);
    


    $stmt->execute();



    if ($stmt->execute()) {
        echo " <strong>OK!</strong> a disciplina 
               $dis foi Alterado com sucesso!!!";
        echo " <button class='button'><a href='listadisciplina.php'>voltar</a></button>";
    }
}


##Excluir
if (isset($_GET['excluir'])) {
    $iddisciplina = $_GET['iddisciplina'];
    $sql = "DELETE FROM `disciplina` WHERE iddisciplina={$iddisciplina}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if ($stmt->execute()) {
        echo " <strong>OK!</strong> a disciplina
          $iddisciplina foi excluida!!!";
        echo " <button class='button'><a href='listadisciplina.php'>voltar</a></button>";
    }
}
