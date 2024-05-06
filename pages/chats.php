<?php


include '../includes/header.php';
include '../actions/chat/buscar_chats.php';
?>


<div class="container-chat">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <!-- lista de todos os chats iniciados -->
                <h2>Chats</h2>
                <ul class="nomeChat">
                    <?php
                    // Verifica se existem chats na sessão
                    if (isset($_SESSION["chats"]) && !empty($_SESSION["chats"])) {
                        // Exibe os chats na lista
                        foreach ($_SESSION["chats"] as $chat) {
                            $chat_id = $chat['ID_CHAT'];
                            $remetente = $chat['REMETENTE'];
                            $destinatario = $chat['DESTINATARIO'];
                            $nome_remetente = $chat['NOME_REMETENTE'];
                            $nome_destinatario = $chat['NOME_DESTINATARIO'];

                            // Define o nome a ser exibido com base no papel do usuário no chat
                            $nome_chat = ($nome_destinatario == $_SESSION["nome"]) ? $nome_remetente : $nome_destinatario;
                    ?>

                            <li class='list-group-item'>
                                <a href="<?= $baseUrl ?>/pages/chats.php?ID_CHAT=<?= $chat_id ?>&destinatario=<?= $nome_destinatario ?>&remetente=<?= $nome_remetente ?>" data-remetente='$remetente' data-destinatario='$destinatario'>
                                    Chat <?= $nome_chat ?>
                                </a>
                            </li>

                    <?php
                        }
                    } else {
                        // Se não houver chats na sessão, exibe uma mensagem
                        echo "<li class='list-group-item'>Nenhum chat encontrado.</li>";
                    }
                    ?>
                </ul>



            </div>
            <!-- Chat Atual -->
            <div class="col-lg-8">
                <div class="chat">
                    <div class="chat-header">
                        <h2>Chat com
                            <span style="display: none;" id="id_chat"><?= $_GET['ID_CHAT'] ?? "" ?></span>
                            <?php if ($destinatario == $_SESSION["id_usuario"]) : ?>
                                <span id="nome_usuario">
                                    <?= $_GET['remetente'] ?? "" ?> <!-- Exibe o nome do remetente -->
                                </span>
                            <?php else : ?>
                                <span id="destinatario"><?= $_GET['destinatario'] ?? "" ?></span>
                            <?php endif; ?>
                        </h2>



                    </div>
                    <div class="chat-body">
                        <div class="mensagens">
                            <p id="aviso">Selecione um chat</p>
                            <div class="loading-animation">
                                <img class="caixa-img" src="<?= $baseUrl ?>/img/logoZippy.png" alt="Carregando...">
                                <p>Carregando...</p>
                            </div>


                        </div>
                    </div>
                    <div class="chat-footer">
                        <input type="text" class="form-control mb-1" placeholder="Digite sua mensagem">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Verifica se o ID do chat está presente na URL
    if (isset($_GET['ID_CHAT'])) {
        // Obtém o ID do chat da URL
        $chat_id = $_GET['ID_CHAT'];

        // Inclui o arquivo JavaScript apenas quando um chat está selecionado
        echo "<script src='../js/chats/busca_mensagens.js'></script>";
    }
    ?>

    <script>
        $(".loading-animation").hide();
    </script>
    <script src="../js/responsive.js"></script>
    <script src="../js/chats/enviar_mensagem.js"></script>
    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    </body>

    </html>