<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Nossas Lojas - Full Stack Eletro</title>
    </head>
    <body>
        <!-- Início do menu -->
        <?php 
            include_once('menu.html');
        ?>
        <!-- Fim do menu -->

        <header>
            <h2>Nossas Lojas</h2>        
        </header>
        <hr>
        
        <main class="boxDados">
            <div>
                <h3>Rio de Janeiro</h3>
                <p> Rua Luigi Galvani, 70</p>
                <p>4 &ordm;</p>
                <p>Centro</p>
                <p>(21) 4004-4044</p>   
            </div>
            <div>
                <h3>São Paulo</h3>
                <p> Rua Luigi Galvani, 70</p>
                <p>4 &ordm;</p>
                <p>Centro</p>
                <p>(21) 4004-4044</p>
            </div>
            <div>
                <h3>Santa Catarina</h3>
                <p> Rua Luigi Galvani, 70</p>
                <p>4 &ordm;</p>
                <p>Centro</p>
                <p>(21) 4004-4044</p>
            </div>
        </main>
       
       
        <footer id="rodape">
            <p id="formaDePagamento">Formas de Pagamento</p>
            <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" width="300px" alt="Formas de pagamento">
            <p id="copyFooter">&copy; Recode Pro</p>
        </footer>
    </body>
</html>