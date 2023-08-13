<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
        <div class="box">
            <form  id="form" method="GET" action="crudaluno.php">
                <fieldset>
                    <legend><b>Fórmulário de Alunos</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text"  name="nome" id="firstname" placeholder="Digite seu nome" class="inputUser" required>
                        <label class="labelInput">Nome aluno</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="number" name="idade" id="idade" class="inputUser" placeholder="Digite sua idade" required>
                        <label for="ida" class="labelInput">Idade</label>
                    </div>

                    <br><br>

                     <label for="nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="datanascimento" id="datanascimento" required>
                    
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required placeholder="Digite seu endereço">
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>


                    <br><br>
                    <br><br>

                    
                    <br>
                    <input type="submit" id="submit" name="cadastrar" value="cadastrar"> 
                </fieldset>
            </form>
            <button class="button" id="submit"><a href="index.php">voltar</a></button>
        </div>
</body>
</html>