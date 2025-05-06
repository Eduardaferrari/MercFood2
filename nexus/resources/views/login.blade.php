<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Savor Bistró</title>
    @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body> 
    <main>
        <section class="login">
            <h1 class="titulo">Bem-Vindo ao</h1>
            <h1 class="titulo">Savor Bistró</h1>
            <p class="paragrafo">Faça o login para acessar sua conta!</p>
            <form action="/site" method="POST">
                @csrf
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <div class="botoes">
                    <button type="submit" class="botao entrar" id="entrarBtn">Entrar</button>
                </div>
            </form>
            <form action="/cadastro" method="POST">
                @csrf
                    <button type="submit" class="botao cadastro">Cadastrar</button>
            </form>
        </section>
    </main>
</body>
</html>