<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Savor Bistrô</title>
    @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body> 
    <main>
        <div class="container">
            <section class="login">
                <h1 class="titulo">Bem-Vindo ao Savor Bistrô</h1>
                <p class="paragrafo">Faça o login para acessar sua conta!</p>
                <form action="/site" method="POST">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <div class="botoes">
                        <form action="/site" method="POST">
                            @csrf
                            <button type="submit" class="botao entrar" id="entrarBtn">Entrar</button>
                        </form>

                        <form action="/cadastro" method="POST">
                            @csrf
                            <button type="submit" class="botao cadastro" onclick="window.location.href='/cadastro'">Cadastrar</button>
                        </form>
                    </div>
                </form>
            </section>
        </div>    
    </main>
</body>
</html>