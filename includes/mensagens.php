<?php

//ADICIONA UMA MENSAGEM DE STATUS DA INSERÇÃO NO BANCO DE DADOS

//cadastro com sucesso ou erro
if (isset($_GET['sucesso']) && $_GET['sucesso'] === 'Cadastrado com sucesso') {
    echo '<div class="alert alert-success" role="alert">Cadastro realizado com sucesso! Faça login agora</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Erro ao cadastrar') {
    echo '<div class="alert alert-danger" role="alert">Erro ao Registrar, tente novamente!</div>';
}

//login com sucesso ou erro
if (isset($_GET['erro']) && $_GET['erro'] == 'Senha incorreta') {
    echo '<div class="alert alert-danger" role="alert">Senha incorreta, tente novamente!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Email não cadastrado') {
    echo '<div class="alert alert-danger" role="alert">Email não cadastrado, Crie uma conta!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Erro ao logar') {
    echo '<div class="alert alert-danger" role="alert">Erro ao logar, tente novamente!</div>';
}

//atualização dos dados do perfil com sucesso ou erro
if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'Atualizado com sucesso') {
    echo '<div class="alert alert-success" role="alert">Atualizado com sucesso!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Erro ao atualizar') {
    echo '<div class="alert alert-danger" role="alert">Erro ao atualizar, tente novamente!</div>';
}

//atualização da foto do perfil com sucesso ou erro
if (isset($_GET['erro']) && $_GET['erro'] == 'Erro no upload') {
    echo '<div class="alert alert-danger" role="alert">Erro no upload, tente novamente!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Nenhum arquivo foi enviado') {
    echo '<div class="alert alert-danger" role="alert">Nenhum arquivo foi enviado, tente novamente!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Tamanho do arquivo excedido') {
    echo '<div class="alert alert-danger" role="alert">Tamanho do arquivo excedido, tente novamente!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'extensao_invalida') {
    echo '<div class="alert alert-danger" role="alert">Extensão inválida, tente novamente!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Erro desconhecido') {
    echo '<div class="alert alert-danger" role="alert">Erro desconhecido, tente novamente!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Erro no banco de dados') {
    echo '<div class="alert alert-danger" role="alert">Erro no banco de dados, tente novamente!</div>';
}


//criação de pedido com sucesso ou erro
if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'Pedido criado com sucesso') {
    echo '<div class="alert alert-success" role="alert">Pedido criado com sucesso!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'Erro ao criar pedido') {
    echo '<div class="alert alert-danger" role="alert">Erro ao criar pedido, tente novamente!</div>';
}else if (isset($_GET['erro']) && $_GET['erro'] == 'Erro ao fazer upload da imagem') {
    echo '<div class="alert alert-danger" role="alert">Erro Ao fazer upload da imagem, tente novamente</div>';
}


//cadastro de endereço com sucesso ou erro
if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'endereco cadastrado') {
    echo '<div class="alert alert-success" role="alert">Endereço cadastrado com sucesso!</div>';
} else if (isset($_GET['erro']) && $_GET['erro'] == 'endereco não cadastrado') {
    echo '<div class="alert alert-danger" role="alert">Endereço não cadastrado, tente novamente!</div>';
}