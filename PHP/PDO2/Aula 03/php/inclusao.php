<?php
require_once 'config.php';
global $dsn, $user, $pass;
try {
    $pdo = new PDO(
        $dsn,
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $stmt = $pdo->prepare("INSERT INTO usuarios (email,senha,username)
    VALUES (?,?,?)");
    $resultSet = $stmt->execute([
        $_REQUEST['Email'],
        $_REQUEST['username'],
        $_REQUEST['confirm_password']
    ]);
    if ($resultSet) {
        echo "Os dados foram inseridos com sucesso";
        header('Location:  index.php');
    } else {
        echo "ouve algum Erro";
        exit;
    }


} catch (PDOException $e) {
    echo 'a conxão falhou erro:' . $e->getMessage();
}

//fim da conexão com bd
finally {
    if ($pdo) {
        $pdo = null;
    }
}

;

?>