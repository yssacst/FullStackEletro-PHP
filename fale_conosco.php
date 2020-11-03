<?php
    include("conexao.php");

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into contato (nome,msg) values ('$nome','$msg')";
        $result = $conn->query($sql);

        if($result){
            echo "<script type='text/javascript'>alert('Enviado com Sucesso!');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Falha ao enviar seu contato. Tente novamente.');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Fale Conosco - Full Stack Eletro</title>
    </head>
    <body>
        <!-- Início do menu -->
        <?php 
            include_once('menu.html');
        ?>
        <!-- Fim do menu -->
        
        <header>
            <h2>Fale Conosco</h2>        
        </header>
        <hr>

        <section class="boxDados">
            <div class="flex">
                <img src="./imagens/email.png" alt="icone de email" width="50px">
                <p>fullstack@eletro.com</p>
            </div>
            <div class="flex">
                <img src="./imagens/whatsapp-logo-1-1.png" alt="icone de whatsapp" width="50px">
                <p>21 4932-4564</p>
            </div>                
        </section>

        <form id="frmContato" method="post" action="">
            <h4>Seu Nome:</h4>
            <input type="text" class="input" name="nome">
            <h4>Mensagem:</h4>
            <textarea class="input" cols="30" placeholder="Sua mensagem" name="msg"></textarea>

            <input type="submit" class="btnForm" value="Enviar">
        </form>

        <footer id="rodape">
            <p id="formaDePagamento">Formas de Pagamento</p>
            <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" width="300px" alt="Formas de pagamento">
            <p id="copyFooter">&copy; Recode Pro</p>
        </footer>
    </body>
</html>