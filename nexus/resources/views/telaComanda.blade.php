<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comanda</title>
    @vite(['resources/css/telaComanda.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="titulo">Comanda de Pedidos</h1>
        <nav>
            <ul class="ul">
                <li>Home</li>
                <li>Pedidos</li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="secao vermelho">
            <h1>Detalhes do Pedido</h1>
            <p>Detalhe dos pedidos feitos pelos clientes</p>
        </section>
        <section class="secao branco">
            <h1>Itens do Pedido</h1>
            <div class=""></div>
        </section>
        <section class="secao vermelho">
            <h3>Nome do Cliente</h3>
            <p>número da mesa</p>
            <p>Detalhes do cliente</p>
        </section>
        <section class="secao branco">
            <div>
                <h1>Adicionar Comentário</h1>
                <p>Deixe seu comentário sobre o atendimento</p>
            </div>
            <div>
                <p>Seu Comentário</p>
                <input type="text" name="comentario" id="comentario">
                <button type="submit">Enviar</button>
            </div>

        </section>
    </main>
    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list">Teste</i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"></span>
                    <span class="txt-link"></span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"></span>
                    <span class="txt-link"></span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"></span>
                    <span class="txt-link"></span>
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>