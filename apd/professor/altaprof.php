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

    $id = $_POST['idprofessor'];

    ##sql para selecionar apens um aluno
    $sql = "SELECT * FROM professor where idprofessor= :idprofessor";

    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':idprofessor', $idprofessor, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno = $retorno->fetch();

    ##armazena retorno em variaveis
    $nome = $array_retorno['nomeprof'];
    $cpf = $array_retorno['cpf'];
    $siape = $array_retorno['siape'];
    $idade = $array_retorno['idade'];
    

    ?>
        <H1>Altere as informações de cadastro</H1>

    <form method="POST" action="crudaprof.php" >

             <div class="input-group">
                
                <div class="input-box">
                     <label for="">nome:</label>
                    <input type="text" name="nomeprof" id="" value=<?php echo $nome ?>>
                </div>

                <br>
                
                <div class="input-box">
                     <label for="">cpf:</label>
                     <input type="number" name="cpf" id="" value=<?php echo $cpf ?>>
                </div>
                <br>
                
                <div class="input-box">
                    <label for="">siape:</label>
                     <input type="text" name="siape" id="" value=<?php echo $siape ?>>
                </div>
                 <br>
               
                 <div class="input-box">
                    <label for="">id:</label>
                   <input type="number" name="id" id="" value=<?php echo $idprofessor ?>>
                </div>
                <br>
                
                <div class="input-box">
                    <label for="">idade:</label>
                    <input type="number" name="idade" id="" value=<?php echo $idade ?>>
                </div>
                <br>
               
                <div class="ambos">
                    <input type="submit" name="update" value="Alterar">
                    <button class="button"><a href="listaprof.php">voltar</a></button>
                </div>
                
            </div>
    
    </form>
</body>
</html>
