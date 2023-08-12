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

    $iddisciplina = $_POST['iddisciplina'];

    ##sql para selecionar apens um aluno
    $sql = "SELECT * FROM disciplina where iddisciplina= :iddisciplina";

    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':iddisciplina', $iddisciplina, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno = $retorno->fetch();

    ##armazena retorno em variaveis
    $dis = $array_retorno['disciplina'];
    $ch = $array_retorno['ch'];
    $semestre = $array_retorno['semestre'];
    $idprofessor = $array_retorno['idprofessor'];
   


    ?>
        <H1>Altere as informações de cadastro</H1>

    <form method="POST" action="crudadisciplina.php" >

             <div class="input-group">
                <div class="input-box">
                     <label for="">disciplina:</label>
                    <input type="text" name="disciplina" id="" value=<?php echo $dis ?>>
                </div>

                <br>
                
                <div class="input-box">
                    <label for="">ch:</label>
                    <input type="text" name="ch" id="" value=<?php echo $ch ?>>
                </div>

                <br>
                
                <div class="input-box">
                    <label for="">id:</label>
                   <input type="number" name="iddisciplina" id="" value=<?php echo $iddisciplina ?>>
                </div>

                <br>
                <div class="input-box">
                     <label for="">semestre:</label>
                     <input type="text" name="semestre" id="" value=<?php echo $semestre ?>>
                </div>

                <br>
                 
                <div class="input-box">
                    <label for="">id profesor:</label>
                     <input type="int" name="idprofessor" id="" value=<?php echo $idprofessor ?>>
                </div>
                
                <br>
                
                
                <br>
                
                <div class="ambos">
                    <input type="submit" name="update" value="Alterar">

                   
                    <button class="button"><a href="listadisciplina.php">voltar</a></button>
                    
                </div>
                
            </div>
    
    </form>
</body>
</html>
