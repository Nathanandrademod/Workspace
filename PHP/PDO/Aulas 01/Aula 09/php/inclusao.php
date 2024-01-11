<?php
require_once 'config.php';
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
if($btnCadUsuario){	
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['confirm_password'] = password_hash($dados['confirm_password'], PASSWORD_DEFAULT);
}
global $dsn, $user, $pass;
try {
    $pdo = new PDO(
        $dsn,
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $stmt = $pdo->prepare("INSERT INTO LOGIN_CADASTRO (email,senha,username)
    VALUES (?,?,?)");
    $resultSet = $stmt->execute([
        $_REQUEST['Email'],
        $_REQUEST['username'],
        $_REQUEST['confirm_password']
    ]);
    if ($resultSet) {
        echo "Os dados foram inseridos com sucesso";
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