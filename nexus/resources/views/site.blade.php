<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <h1>Sistema de Pedidos</h1>
    <form action="/telaComanda" method="get" class="form">
        <button type="submit" class="comandas">Comandas</button>
    </form>
</header>

<div class="container">
    <div class="status-section">
        <h2>Novos Pedidos</h2>
        <table>
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Mesa</th>
                    <th>Produto</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://i.pinimg.com/736x/3a/31/48/3a314809995130fbad3add63eb06238e.jpg" class="order-img" alt="Pizza"></td>
                    <td>13</td>
                    <td>2x Pizzas Portuguêsas, Obs: Retirar a cebola</td>
                    <td><button class="btn">Preparar</button></td>
                </tr>
                <tr>
                    <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo-JAmIiEzcyZFal-Yj1UMmzWeDZIHliG_Rg&s" class="order-img" alt="Burger"></td>
                    <td>09</td>
                    <td>1x Parmegiana, Obs: Sem ervilha</td>
                    <td><button class="btn">Preparar</button></td>
                </tr>
                <tr>
                    <td><img src="https://marmitexdesucesso.com.br/wp-content/uploads/2024/10/Pode-congelar-hamburguer-pronto-1.jpg" class="order-img" alt="Burger"></td>
                    <td>DELIVERY</td>
                    <td>1x Hamburguer da Casa</td>
                    <td><button class="btn">Preparar</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="status-section">
        <h2>Pedidos Preparando</h2>
        <table>
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Mesa</th>
                    <th>Produto</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://blog.biglar.com.br/wp-content/uploads/2023/11/salad-from-tomatoes-cucumber-red-onions-lettuce-leaves-healthy-summer-vitamin-menu-vegan-vegetable-food-vegetarian-dinner-table.jpeg" class="order-img" alt="Salada"></td>
                    <td>15</td>
                    <td>4x Cola-Cola lata,Obs: Gelo e Limão</td>
                    <td><button class="btn btn-danger">Concluir</button></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td><img src="https://anamariareceitas.com.br/wp-content/uploads/2024/08/pizza-de-calabresa_1723632793345-1024x576.jpg.webp" class="order-img" alt="Pizza"></td>
                    <td>15</td>
                    <td>1X Pizza Calabresa</td>
                    <td><button class="btn btn-danger">Concluir</button></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo-JAmIiEzcyZFal-Yj1UMmzWeDZIHliG_Rg&s" class="order-img" alt="Salada"></td>
                    <td>DELIVERY</td>
                    <td>2x Parmegianas, Add: Mais molho</td>
                    <td><button class="btn btn-danger">Concluir</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="status-section">
        <h2>Pedidos Concluídos</h2>
        <table>
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Mesa</th>
                    <th>Produto</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo-JAmIiEzcyZFal-Yj1UMmzWeDZIHliG_Rg&s" class="order-img" alt="Sushi"></td>
                    <td>02</td>
                    <td>1x Parmegiana</td>
                    <td>Concluído</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td><img src="https://i.pinimg.com/736x/3a/31/48/3a314809995130fbad3add63eb06238e.jpg" class="order-img" alt="Sushi"></td>
                    <td>17</td>
                    <td>3x Pizzas Portuguêsas, Obs: Retirar o Palmito</td>
                    <td>Concluído</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td><img src="https://marmitexdesucesso.com.br/wp-content/uploads/2024/10/Pode-congelar-hamburguer-pronto-1.jpg" class="order-img" alt="Sushi"></td>
                    <td>DELIVERY</td>
                    <td>2x Hamburguers da Casa, Add: 1x Hamburguer 120g</td>
                    <td>Concluído</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td><img src="https://marmitexdesucesso.com.br/wp-content/uploads/2024/10/Pode-congelar-hamburguer-pronto-1.jpg" class="order-img" alt="Sushi"></td>
                    <td>01</td>
                    <td>3x Hamburguers da Casa, Obs: Retirar a salada</td>
                    <td>Concluído</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>