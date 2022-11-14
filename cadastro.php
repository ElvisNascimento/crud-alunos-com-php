<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '1234';
$dbName = 'db_alunos';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $matricula = $_POST['matricula'];

    if ($nome != '' && $cidade != '' && $matricula != '') {
        $query = mysqli_query($conexao, "INSERT INTO alunos(nome,cidade,matricula)VALUES('$nome','$cidade','$matricula')");
        if ($query) {
            // Vertically centered modal
            echo "
            <h3>Cadastro efetuado com sucesso</h3>
            ";
        }
    } else {
        // Vertically centered modal
        echo "
             <h2>não cadastrado</h2>
        ";
    }
}
?>