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
        <div class="container">
            <section class="cadastro">
                <h1 class="titulo">Cadastro</h1>
                <p class="paragrafo">Preencha os campos abaixo para criar sua conta.</p>
                <form action="{{ isset($cliente) ? 
                    route('clientes.update', ['cliente' => $cliente->id]) : 
                    route('clientes.store') }}" method="POST">
                    @isset($cliente)
                        @method('PUT')
                    @endisset
                    @csrf
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" value="{{ $cliente->nome ?? '' }}" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" value="{{ $cliente->email ?? '' }}" required>
                    <input type="password" name="senha" id="senha" placeholder="Senha" value="{{ $cliente->senha ?? '' }}" required>
                    <input type="tel" name="telefone" id="telefone" placeholder="Número de Telefone" value="{{ $cliente->telefone ?? '' }}" required>
                    <input type="text" name="endereco" id="endereco" placeholder="Endereço" value="{{ $cliente->endereco ?? '' }}" required>
                    <div class="botoes">
                        <button type="submit" class="botao cadastro" id="cadastroBtn">Cadastrar</button>
                        <button type="button" class="botao entrar" id="voltar" onclick="window.location.href='/login'">Voltar para Login</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>