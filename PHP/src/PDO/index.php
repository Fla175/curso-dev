<?php 
    // Conexão com o banco de dados usando PDO

    if (!empty($_POST['user']) && !empty($_POST['senha'])) {}

    // Informações da conexão
    $dsn = 'mysql:host=localhost;dbname=pdo';
    $user = 'root';
    $senha = 'gxyde783ddsdswdre';

    // Bloco de tratamento de erro (Try-Catch)
    try {
        // Conexão atribuida à variável $connection
        $connection = new PDO($dsn, $user, $senha);

        $query = "INSERT INTO tb_usuarios ('nome', 'email', 'senha') VALUES ('Rivaldo Jesus', 'rivaldjesus@gmail.com', '234567')";
        $connection->query($query);

        $query = "INSERT INTO tb_usuarios ('nome', 'email', 'senha') VALUES ('Reges Segou', 'olhador.profissional@gmail.com', '234567')";
        $connection->query($query);
        
        $query = "INSERT INTO tb_usuarios ('nome', 'email', 'senha') VALUES ('Xavier Linpadas', 'limpador.telas@gmail.com', '234567')";
        $connection->query($query);
        
        $query = "INSERT INTO tb_usuarios ('nome', 'email', 'senha') VALUES ('João Ramon da Silva Wader', 'gersinho.fantasma.camarada@gmail.com', '234567')";
        $connection->query($query);

        $query = "SELECT * FROM tb_usuarios WHERE ";
        $query .= " email = :user";
        $query .= " AND senha = :senha";

        $stmt = $connection->prepare($query);

        $stmt->bindValue(':user', $_POST['user']);
        $stmt->bindValue(':senha', $_POST['senha'], PDO::PARAM_INT);

        $stmt->execute();

        $user = $stmt->fetch();

        echo "<pre>";
        print_r($user);
        echo "</pre>";

    } catch (PDOException $e) {
        // Captura a exception e registra o erro para corrigir dps
        echo "Erro: {$e->getCode()} Mensagem: {$e->getMessage()}";
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="index.php">
        <input type="text" placeholder="usuário" name="user">
        <br>
        <input type="password" placeholder="senha" name="senha">
        <br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>