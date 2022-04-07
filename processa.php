<?php
    //variaveis globais
    // $nome = $_GET['nome'];
    // $sexo = $_GET['sexo'];
    // $senha = $_GET['senha'];
    
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $senha = $_POST ['senha'];
    $confirma = $_POST ['confirma'];
    

    echo "<p><b> Nome: ". $nome . "</b></p>";
    echo "<p><b>Sexo: ". $sexo . "</b></p>";
    echo "<p><b>Senha " . $senha . "</b></p>";
    //echo "<p><b>Nome: " . $_REQUEST['nome']. "</b></p>";

    //echo strlen($nome);//quantidade de caracteres
    //echo "<br>";
    //echo (int) empty ($nome);
    
    if( strlen($nome)==0)
    {
        header("location:teste.php?erro=nome");
    }
    
    if(strlen($senha)<=6)
    {
        header("location:teste.php?erro=senha");
    }

    if($confirma != $senha)
    {
        header("location:teste.php?erro=confirma");
    }

    //var_dump ($_FILES['arq']);
    $_NomeArquivo = $_FILES ['arq']['name'];
    $_Pasta = "arq/".$_NomeArquivo ; // arq/.pdf
    $_tmp = $_FILES ['arq']['tmp_name'];

    move_uploaded_file ($_tmp, $_Pasta)
    ?>