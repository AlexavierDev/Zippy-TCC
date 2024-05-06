<?php

require_once "../conexao_bd.php";

// Verifica se o parâmetro chat_id foi passado na URL
if (isset($_GET['chat_id'])) {
    // Obtém o valor do parâmetro chat_id
    $chat_id = $_GET['chat_id'];

    // Consulta SQL para buscar as mensagens do chat
    $sql = "SELECT * FROM tb_mensagens WHERE CHAT_ID = :chat_id ORDER BY DTA_ENVIO";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":chat_id", $chat_id);
    $stmt->execute();

    // Array para armazenar as mensagens
    $mensagens = array();

    // Loop através das linhas de resultado
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Adiciona a mensagem ao array de mensagens
        $mensagens[] = $row;
    }

    // Verifica se o array de mensagens está vazio
    if (empty($mensagens)) {
        // Se não houver mensagens, envia uma mensagem indicando que não há mensagens disponíveis
        $response =  array("mensagem" => "Nenhuma mensagem encontrada para este chat.");
    } else {
        // Se houver mensagens, envia as mensagens em formato JSON
        $response = $mensagens;
    }
} else {
    // Se o parâmetro chat_id não foi passado, envia uma mensagem de erro
    $response = array("erro" => "Parâmetro chat_id não foi fornecido.");
}

// Retorna a resposta como JSON
echo json_encode($response);

