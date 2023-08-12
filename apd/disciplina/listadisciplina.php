<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listaalunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/lista.css">
  
</head>
<body>
    
</body>
</html>
    
<?php
    /*
    * Melhor prática usando Prepared Statements
    * 
    */
    require_once('../conexao.php');

    $retorno = $conexao->prepare('SELECT * FROM disciplina');
    $retorno->execute();

            ?> 
            
            <div class="title">
                 <h1>Lista de disciplinas</h1>
            </div>
           
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DISCIPLINA</th>
                            <th>CH</th>
                            <th>SEMESTRE</th>
                            <th>ID PROFESSOR</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php foreach ($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['iddisciplina'] ?> </td>
                            <td> <?php echo $value['disciplina'] ?> </td>
                            <td> <?php echo $value['ch'] ?> </td>
                            <td> <?php echo $value['semestre'] ?> </td>
                            <td> <?php echo $value['idprofessor'] ?> </td>
                          

                            <td>
                                <form method="POST" action="altadisciplina.php">
                                    <input name="iddisciplina" type="hidden" value="<?php echo $value['iddisciplina']; ?>" />
                                    <button name="alterar" type="submit">Alterar</button>
                                </form>

                            </td>

                            <td>
                                <form method="GET" action="crudadisciplina.php">
                                    <input name="iddisciplina" type="hidden" value="<?php echo $value['iddisciplina']; ?>" />
                                    <button name="excluir" type="submit">Excluir</button>
                                </form>

                            </td>
                        </tr>
                        <?php  }  
                        ?>
                        </tr>
                    </tbody>
                </table>
                <?php
                    echo "<button class='button button3'><a href='discindex.php'>voltar</a></button>";
                ?>
            </div>
            
</php>

