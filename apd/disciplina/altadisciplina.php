<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar</title>
    <link rel="stylesheet" href="../css/altaluno.css">
</head>

<body>

    <?php
    require_once('../conexao.php');

    $iddisciplina = $_POST['id'];

    ##sql para selecionar apens um aluno
    $sql = "SELECT * FROM disciplina where id= :iddisciplina";

    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':iddisciplina', $iddisciplina, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno = $retorno->fetch();

    ##armazena retorno em variaveis
    $disciplina = $array_retorno['disciplina'];
    $ch = $array_retorno['ch'];
    $semestre = $array_retorno['semestre'];
    $idprofessor = $array_retorno['idprofessor'];
    $nota1 = $array_retorno['Nota1'];
    $nota2 = $array_retorno['Nota2'];
    $id = $array_retorno['id'];
   


    ?>
        <H1>Altere as informações de cadastro</H1>

    <form method="POST" action="crudadisciplina.php" >
             <div class="input-group">
                <div class="input-box">
                     <label for="">Disciplina:</label>
                    <input type="text" name="disciplina" id="" value=<?php echo $disciplina ?>>
                </div>

                <br>
                
                <div class="input-box">
                    <label for="">Cargo horaria:</label>
                    <input type="text" name="ch" id="" value=<?php echo $ch ?>>
                </div>

                <br>

                <br>
                
                <div class="input-box">
                     <label for="">Semestre:</label>
                     <input type="text" name="semestre" id="" value=<?php echo $semestre ?>>
                </div>

                <br>
                 
                <div class="input-box">
                    <label for="">Id profesor:</label>
                     <input type="int" name="idprofessor" id="" value=<?php echo $idprofessor ?>>
                </div>
                
                <br>
                
                <div class="input-box">
                    <label for="">Nota 1:</label>
                     <input type="text" name="nota1" id="" value=<?php echo $nota1 ?>>
                </div>
                
                <br>
                
                <div class="input-box">
                    <label for="">Nota 2:</label>
                     <input type="text" name="nota2" id="" value=<?php echo $nota2 ?>>
                </div>

                <div class="ambos">
                    <input type="submit" name="update" value="Alterar">
                    <button class="button"><a href="listadisciplina.php">voltar</a></button>
                </div>
                
            </div>
    </form>
</body>
</html>
