<?php
include '../includes/header.php';
?>


<div class="container-pedido">
    <img src="../img/layout/meusPedidos.svg" alt="Meus Pedidos">
    <div class="meusPedidos">
        <h2>Meus Pedidos</h2>
        <ul class="lista-pedidos">

            <li class="pedido">
                <img src="../img/produtos/airPods.png" alt="Nome do Produto">
                <div class="info-pedido">
                    <h3>Pedido #12345</h3>
                    <p>Descrição do produto: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Status: Em aberto</p>
                </div>
            </li>

            <li class="pedido">
                <img src="../img/produtos/airPods.png" alt="Nome do Produto">
                <div class="info-pedido">
                    <h3>Pedido #12345</h3>
                    <p>Descrição do produto: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Status: Em aberto</p>
                </div>
            </li>

            <li class="pedido">
                <img src="../img/produtos/airPods.png" alt="Nome do Produto">
                <div class="info-pedido">
                    <h3>Pedido #12345</h3>
                    <p>Descrição do produto: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Status: Em aberto</p>
                </div>
            </li>

        </ul>
    </div>
</div>


<script src="<?= $baseUrl ?>/js/responsive.js"></script>
<script src="<?= $baseUrl ?>/js/disclaimer.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>