<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Teste</title>
    <!--<link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
    <header class = "cabecalho">    
        <nav class ="cabecalho-menu" >
            <!-- adicionar imagem php-->
            <!-- <a href= "https://github.com/minimundosbr" class = "cabecalho-menu-item"> Github </a>
            <a href= "https://twitter.com/Minimund0sbr" class = "cabecalho-menu-item"> Twitter </a>
            <a href= "https://www.instagram.com/v.hu_go/" class = "cabecalho-menu-item"> Instagram </a>
            <a href= "https://www.linkedin.com/in/victor-hugo-araujo-foga%C3%A7a-91220121a/" class = "cabecalho-menu-item"> LinkedIn </a> -->
        </nav>
    </header>
    <p><h1 id = "titulo">Formulário</h1></p>
    <p id = subtitulo >Complete com suas informações</p>
    <!--get = dados via url; 
    post = dados ocultos -->

    <form action ="processa.php" method ="post" enctype="multipart/form-data">
        <fieldset class = "grupo"> <!-- fechando na linha 80-->
        <div>    
            <b><label>Name:</label></b>
            <input type ="text" id ="nome" name ="nome"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "nome")
                {
                    echo "<span style='color:red'>INSIRA SEU NOME</span>";
                }
            ?>

        </div>
    
        <div class = "sexo">
            <b><label>Sexo:</label></b>
            <input type ="radio" id ="sexo" checked name ="sexo" value ="f" /> Female
            <input type ="radio" id ="sexo" name ="sexo" value ="m" /> Male
        </div>

        <div class = "email">
            <b><label>Email:</label></b>
            
            <input type="email" id="email" name = "email" >
        </div>

    <div class = "senha">
        <b><label for="x">Senha:</label></b>
        
        <input type="password" id="x" name="senha" />
        
        <?php
            if(isset($_GET ['erro']) && $_GET ['erro'] == "senha")
            {
                echo "<span style='color:red'>INSIRA SUA SENHA!</span>";
            }
        ?>
        </div> 

        <div class = "confirmaSenha">
            <b><label>Confirme sua senha:</label></b>
            <input type="password" id = "x" name="confirma"/>

            <?php
                if(isset($_GET ['erro']) && $_GET ['erro'] == "confirma")
                {
                    echo "<span style='color:red'>Use senhas iguais!</span>";
                }
            ?>
        </div>
        
            <div class = "arq">
                <b><label> Arquivo </label></b>      
                <input type = "file" name = "arq"/>

                <p class = "btnEnvia"><input type = "submit" value = "Enviar"/></p> <!--button submit -->
            </div>
            </fieldset>

    </form>
</body>
</html>
