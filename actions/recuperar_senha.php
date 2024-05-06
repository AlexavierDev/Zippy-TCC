    <?php
    require_once 'conexao_bd.php';

    //verifica se o botao btn-recupera foi clicado e se o email foi preenchido
    if (isset($_POST['btn-recupera']) && !empty($_POST['emailCadastrado'])){

        $email = $_POST['emailCadastrado'];

        //verifica se o email existe no banco de dados
        $sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";

        try {
            $stmt = $pdo->query($sql);
            $stmt->execute();

            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $emailRecuperado = $resultado[0]['email'];
            $senha = $resultado[0]['senha'];

            //envia email com a senha






        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
        