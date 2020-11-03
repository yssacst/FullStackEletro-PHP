<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Produtos - Full Stack Eletro</title>
    </head>
    <body>
        <!-- Início do menu -->
        <?php 
            include_once('menu.html');
        ?>
        <!-- Fim do menu -->

        <header>
            <h2>Produtos</h2>        
        </header>
        <hr>

        <div class="boxMain">
            <section class="categorias">
                <h3>Categorias</h3>
                <ul>
                    <li onclick="exibir('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibir('fogao')">Fogões (2)</li>
                    <li onclick="exibir('microondas')">Microondas (1)</li>
                    <li onclick="exibir('lavaroupas')">Lavadoura de Roupas (2)</li>
                    <li onclick="exibir('lavaloucas')">Lava-Louças (2)</li>
                    <li onclick="exibir('todos')">Todos</li>
                </ul>
            </section>
            <section class="produtos">
               <?php

                    $sql = 'select * from produtos';
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($rows = $result->fetch_assoc()){
                ?>
                <div class="boxProduto" id="<?php echo $rows["categoria"];?>">
                    <img src="<?php echo $rows["nome_imagem"];?>" width="100px" class="imgbox"  onmousemove="ampliarImg(this)" onmouseout="diminuirImg(this)" >
                    <br>
                    <p class="descricao"> <?php echo $rows["descricao"];?></p>
                    <hr>
                    <p class="descricao"><strike>R$ <?php echo $rows["preco"];?></strike></p>
                    <p class="preco">R$ <?php echo $rows["preco_venda"];?></p>
                </div>
                <?php 
                        }
                    }else{
                        echo "Nenhum poduto cadastrado";
                    }
                ?>
            </section>
        </div> 
       <footer id="rodape">
            <p id="formaDePagamento">Formas de Pagamento</p>
            <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" width="300px" alt="Formas de pagamento">
            <p id="copyFooter">&copy; Recode Pro</p>
        </footer>

        <script src="./js/index.js" async ></script>
    </body>
</html>