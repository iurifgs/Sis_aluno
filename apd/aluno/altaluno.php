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

    $id = $_POST['idaluno'];

    ##sql para selecionar apens um aluno
    $sql = "SELECT * FROM aluno where idaluno= :idaluno";

    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':idaluno',$idaluno, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno = $retorno->fetch();

    ##armazena retorno em variaveis
    $nome = $array_retorno['nome'];
    $idade = $array_retorno['idade'];
    $datanascimento = $array_retorno['datanascimento'];
    $endereco = $array_retorno['endereco'];
    $matricula = $array_retorno['matricula'];


    ?>
        <H1>Altere as informações de cadastro</H1>

    <form method="POST" action="crudaluno.php" >

             <div class="input-group">
                <div class="input-box">
                     <label for="">nome:</label>
                    <input type="text" name="nome" id="" value=<?php echo $nome?>>
                </div>

                <br>
                
                <div class="input-box">
                    <label for="">idade:</label>
                    <input type="number" name="idade" id="" value=<?php echo $idade ?>>
                </div>

                <br>
                
                <div class="input-box">
                    <label for="">id:</label>
                   <input type="number" name="idaluno" id="" value=<?php echo $idaluno ?>>
                </div>

                <br>
                <div class="input-box">
                     <label for="">data nascimento:</label>
                     <input type="date" name="datanascimento" id="" value=<?php echo $datanascimento ?>>
                </div>

                <br>
                 
                <div class="input-box">
                    <label for="">endereco:</label>
                     <input type="text" name="endereco" id="" value=<?php echo $endereco ?>>
                </div>
                
                <br>
                
                <div class="input-box">
                    <label for="">matricula:</label>
                    <input type="text" name="matricula" id="" value=<?php echo $matricula ?>>
                </div>
                    
                <br>
                
                <div class="ambos">
                    <input type="submit" name="update" value="Alterar">

                   
                    <button class="button"><a href="listaalunos.php">voltar</a></button>
                    
                </div>
                
            </div>
    
    </form>
</body>
</html>
