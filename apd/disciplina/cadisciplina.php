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
                        <label for="ida" class="labelInput">ch:</label>
                    </div>

                    <br><br>

                     <div class="inputBox">
                        <input type="text" name="semestre" id="seme" class="inputUser" required placeholder="Digite o semestre">
                        <label for="semestre" class="labelInput">semestre:</label>
                    </div>
                    
                    <br><br>

                    <div class="inputBox">
                        <input type="number" name="idprofessor" id="idp" class="inputUser" required placeholder="Digite seu id">
                        <label for="idp" class="labelInput">ID professor:</label>
                    </div>

                  

                    <br><br>
                    <br><br>

                    
                    <br>
                    <input type="submit" id="submit" name="cadastrar" value="cadastrar"> 
                </fieldset>
            </form>
            <button class="button" id="submit"><a href="discindex.php">voltar</a></button>
        </div>
</body>
</html>