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
            <form  id="form" method="GET" action="crudaprof.php">
                <fieldset>
                    <legend><b>Fórmulário de professores</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text"  name="nomeprof" id="firstname" placeholder="Digite seu nome" class="inputUser" required>
                        <label class="labelInput">Nome professor:</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="number" name="idade" id="idade" class="inputUser" placeholder="Digite sua idade" required>
                        <label for="ida" class="labelInput">Idade:</label>
                    </div>

                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="siape" id="siape" class="inputUser" required placeholder="Digite seu siape">
                        <label for="siape" class="labelInput">siape:</label>
                    </div>
                    
                    <br><br>

                    <div class="inputBox">
                        <input type="number" name="cpf" id="cpf" class="inputUser" required placeholder="Digite seu cpf">
                        <label for="cpf" class="labelInput">Cpf:</label>
                    </div>

                    <br><br>
                    <br><br>

                    
                    <br>
                    <input type="submit" id="submit" name="cadastrar" value="cadastrar"> 
                </fieldset>
            </form>
            <button class="button" id="submit"><a href="proindex.php">voltar</a></button>
        </div>
</body>
</html>