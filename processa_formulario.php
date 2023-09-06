<?php
// Conecte-se ao banco de dados (substitua com suas próprias credenciais)
$host = "localhost";
$usuario = "ximas";
$senha = "244466666";
$banco = "contatos";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Processar os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if (mysqli_query($conexao, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conexao);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>
