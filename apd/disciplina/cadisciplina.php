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
            <form  id="form" method="GET" action="crudadisciplina.php">
                <fieldset>
                    <legend><b>Fórmulário de disciplinas</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text"  name="disciplina" id="dis" placeholder="Digite a disciplina" class="inputUser" required>
                        <label class="labelInput">Nome disciplina:</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="ch" id="ch" class="inputUser" placeholder="Digite o ch" required>
                        <label for="ida" class="labelInput">Cargo horaria:</label>
                    </div>

                    <br><br>

                     <div class="inputBox">
                        <input type="text" name="semestre" id="seme" class="inputUser" required placeholder="Digite o semestre">
                        <label for="semestre" class="labelInput">Semestre:</label>
                    </div>
                    
                    <br><br>

                    <div class="inputBox">
                        <input type="number" name="idprofessor" id="idp" class="inputUser" required placeholder="Digite seu id">
                        <label for="idp" class="labelInput">ID professor:</label>
                    </div>
                    
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="nota1" id="idp" class="inputUser" required placeholder="Digite a nota 1">
                        <label for="idp" class="labelInput">Nota 1:</label>
                    </div>

                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="nota2" id="idp" class="inputUser" required placeholder="Digite a nota 2">
                        <label for="idp" class="labelInput">Nota 2:</label>
                    </div>

                    <br>

                    <input type="submit" id="submit" name="cadastrar" value="cadastrar"> 
                
                </fieldset>
            </form>
            
                    <button class="button" id="submit"><a href="discindex.php">voltar</a></button>
        
        </div>
</body>
</html>