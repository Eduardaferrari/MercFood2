<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    @vite(['resources/css/cadastro.css'])
</head>
<body>
    <main>
        <section class="login">
            <h1 class="titulo">Cadastro</h1>
            <p class="paragrafo">Faça o cadastro!</p>
            <form action="/site" method="POST" class="form">
                @csrf
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <input type="tel" name="telefone" id="telefone" placeholder="Número de telefone" required>
                <input type="text" name="endereco" id="endereco" placeholder="Endereço" required>
                <div class="botoes">
                    <button type="submit" class="botao entrar" id="entrarBtn">Entrar</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>