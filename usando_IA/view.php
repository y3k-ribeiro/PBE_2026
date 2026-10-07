<?php
require_once "logica.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLove - Cadastro</title>
    <style>
        :root {
            --cor-principal: #7B2CBF;
            --cor-secundaria: #C77DFF;
            --cor-destaque: #FFB703;
            --cor-fundo: #F8F5FF;
            --cor-texto: #292333;
            --branco: #FFFFFF;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: Arial, sans-serif;
            background: var(--cor-fundo);
            color: var(--cor-texto);
        }

        header {
            background: linear-gradient(135deg, var(--cor-principal), var(--cor-secundaria));
            color: white;
            padding: 28px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        header h1 { font-size: 30px; }
        header p { margin-top: 5px; opacity: .9; }

        .container {
            width: min(1100px, 92%);
            margin: 35px auto;
        }

        .card {
            background: var(--branco);
            border-radius: 20px;
            padding: 28px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(75, 30, 110, .10);
        }

        h2 {
            color: var(--cor-principal);
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 7px;
        }

        input, select {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 15px;
        }

        .servicos {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .servico {
            border: 2px solid #eee;
            border-radius: 16px;
            overflow: hidden;
            transition: .2s;
            background: white;
        }

        .servico:hover {
            transform: translateY(-3px);
            border-color: var(--cor-secundaria);
        }

        .servico img {
            width: 100%;
            height: 170px;
            object-fit: cover;
            display: block;
        }

        .servico-conteudo {
            padding: 15px;
        }

        .servico input {
            width: auto;
            margin-right: 8px;
            accent-color: var(--cor-principal);
        }

        .servico h3 {
            color: var(--cor-principal);
            margin-bottom: 6px;
        }

        .preco {
            color: #666;
            font-size: 14px;
            margin-top: 7px;
        }

        .botao {
            width: 100%;
            border: 0;
            padding: 15px;
            border-radius: 12px;
            background: var(--cor-principal);
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
        }

        .botao:hover { background: #5f1f95; }

        .rodape {
            text-align: center;
            padding: 25px;
            color: #777;
        }

        @media (max-width: 700px) {
            .grid, .servicos { grid-template-columns: 1fr; }
            header { flex-direction: column; align-items: flex-start; }
        }
    </style>
</head>
<body>

<header>
    <div>
        <h1>🐾 PetLove</h1>
        <p>Cuidados especiais para o seu melhor amigo</p>
    </div>
    <strong>Cadastro de serviços</strong>
</header>

<main class="container">
    <form action="logica.php" method="POST">

        <section class="card">
            <h2>👤 Cadastro do cliente e do pet</h2>

            <div class="grid">
                <div>
                    <label for="nome_cliente">Nome do cliente</label>
                    <input type="text" id="nome_cliente" name="nome_cliente" required>
                </div>

                <div>
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>

                <div>
                    <label for="nome_pet">Nome do pet</label>
                    <input type="text" id="nome_pet" name="nome_pet" required>
                </div>

                <div>
                    <label for="porte">Porte do pet</label>
                    <select id="porte" name="porte" required>
                        <option value="">Selecione</option>
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="card">
            <h2>✂️ Escolha os serviços</h2>
            <p style="margin-bottom:20px;">Você pode escolher <strong>mais de um serviço</strong>.</p>

            <div class="servicos">
                <label class="servico">
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?auto=format&fit=crop&w=900&q=80" alt="Cachorro tomando banho">
                    <div class="servico-conteudo">
                        <h3>🛁 Banho</h3>
                        <input type="checkbox" name="servicos[]" value="banho">
                        Selecionar
                        <div class="preco">Pequeno R$ 50 | Médio R$ 70 | Grande R$ 90</div>
                    </div>
                </label>

                <label class="servico">
                    <img src="https://images.unsplash.com/photo-1591946614720-90a587da4a36?auto=format&fit=crop&w=900&q=80" alt="Tosa de cachorro">
                    <div class="servico-conteudo">
                        <h3>✂️ Tosa</h3>
                        <input type="checkbox" name="servicos[]" value="tosa">
                        Selecionar
                        <div class="preco">Pequeno R$ 60 | Médio R$ 80 | Grande R$ 100</div>
                    </div>
                </label>

                <label class="servico">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?auto=format&fit=crop&w=900&q=80" alt="Cuidados com cachorro">
                    <div class="servico-conteudo">
                        <h3>🐾 Corte de unhas</h3>
                        <input type="checkbox" name="servicos[]" value="unhas">
                        Selecionar
                        <div class="preco">Pequeno R$ 20 | Médio R$ 25 | Grande R$ 30</div>
                    </div>
                </label>

                <label class="servico">
                    <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=900&q=80" alt="Cachorro recebendo cuidados">
                    <div class="servico-conteudo">
                        <h3>🧴 Hidratação</h3>
                        <input type="checkbox" name="servicos[]" value="hidratacao">
                        Selecionar
                        <div class="preco">Pequeno R$ 35 | Médio R$ 45 | Grande R$ 55</div>
                    </div>
                </label>
            </div>
        </section>

        <section class="card">
            <button class="botao" type="submit">Calcular total e gerar relatório →</button>
        </section>

    </form>
</main>

<div class="rodape">PetLove © 2026 — Cuidando de quem faz parte da família 🐶🐱</div>
</body>
</html>
