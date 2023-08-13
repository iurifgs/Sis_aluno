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

    $id = $_POST['id'];

    ##sql para selecionar apens um aluno
    $sql = "SELECT * FROM professor where id= :id";

    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':id', $id, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno = $retorno->fetch();

    ##armazena retorno em variaveis
    $nome = $array_retorno['nome'];
    $cpf = $array_retorno['cpf'];
    $idade = $array_retorno['idade'];
    $datanascimento = $array_retorno['datanascimento'];
    $endereco = $array_retorno['endereco'];
    

    ?>
        <H1>Altere as informações de cadastro</H1>

    <form method="POST" action="crudaprof.php" >

             <div class="input-group">
                
                <div class="input-box">
                     <label for="">Nome:</label>
                    <input type="text" name="nome" id="" value=<?php echo $nome ?>>
                </div>

                <br>
                
                <div class="input-box">
                     <label for="">cpf:</label>
                     <input type="number" name="cpf" id="" value=<?php echo $cpf ?>>
                </div>
                <br>
                
                <div class="input-box">
                    <label for="">Endereco:</label>
                     <input type="date" name="endereco" id="" value=<?php echo $endereco ?>>
                </div>
                 <br>
               
                 <div class="input-box">
                    <label for="">Id:</label>
                   <input type="number" name="id" id="" value=<?php echo $id ?>>
                </div>
                <br>
                
                <div class="input-box">
                    <label for="">idade:</label>
                    <input type="number" name="idade" id="" value=<?php echo $idade ?>>
                </div>

                <br>

                <div class="input-box">
                    <label for="">Data de nascimento:</label>
                    <input type="date" name="datanascimento" id="" value=<?php echo $datanascimento ?>>
                </div>

                <div class="ambos">
                    <input type="submit" name="update" value="Alterar">
                    <button class="button"><a href="listaprof.php">voltar</a></button>
                </div>
                
            </div>
    
    </form>
</body>
</html>
