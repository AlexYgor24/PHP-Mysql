<?php
    if(isset($_POST["acao"])){
        //importar o arquivo de conexão.
        require_once "conexao.php";
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        //Verificar na Base.
        $sql = "select * from usuarios where usuarios.cpf = :login and usuarios.senha = :senha";
        $comando = $conn -> prepare($sql);
        $comando -> bindParam(":login", $usuario);
        $comando -> bindParam(":senha", $senha);
        $comando -> execute();
        if($comando->rowCount()== 1){
            echo "   | Existe esse usuário em sua base de dados!!!!!";
            echo ($usuario);
       //   header("Location: ../../dashboard/listar_usuarios.php");
        } else{
            echo "   | Erro! Usuário ou senha incorretos!";
         //   header("Location: ../../login.php");
        }
    } else {
        echo "ERRROOOOOOOOOOO. ACESSO INDEVIDO!!!!!!";
     //   header("Location: ../../login.php");
    }
?>

