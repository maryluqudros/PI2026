<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Painel administrativo da floricultura TRIFLORA">
    <title>Painel Administrativo | TRIFLORA</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

<div class="dashboard-container">

    <!-- ============================================================
         SIDEBAR
    ============================================================= -->
    <aside class="sidebar">

        <div class="sidebar-header">
            <a href="dashboard.php" class="badge-logo" aria-label="Ir para a visão geral">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
                TRIFLORA
            </a>
            <span class="badge-role">Painel do Funcionário</span>
        </div>

        <nav class="sidebar-nav" aria-label="Menu principal">
            <ul>
                <li>
                    <a href="dashboard.php" class="nav-item active" aria-current="page">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        Visão Geral
                    </a>
                </li>
                <li>
                    <a href="catalogo.php" class="nav-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                        Catálogo de Flores
                    </a>
                </li>
                <li>
                    <a href="pedidos.php" class="nav-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        Pedidos e Encomendas
                        <span class="nav-badge">12</span>
                    </a>
                </li>
                <li>
                    <a href="estoque.php" class="nav-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        Estoque (Câmara Fria)
                        <span class="nav-badge alert">3</span>
                    </a>
                </li>
                <li>
                    <a href="entregas.php" class="nav-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                        Entregas
                    </a>
                </li>
                <li>
                    <a href="clientes.php" class="nav-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="relatorios.php" class="nav-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                        Relatórios
                    </a>
                </li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <p class="connection-status">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                Conexão Segura
            </p>
            <span class="version">v2.4.0</span>
        </div>

    </aside>

    <!-- ============================================================
         CONTEÚDO PRINCIPAL
    ============================================================= -->
    <main class="main-content">

        <!-- HEADER -->
        <header class="top-header">

            <div class="welcome-text">
                <h1>Boas-vindas, <span class="user-name">Marina Alves</span></h1>
                <p class="welcome-subtitle">
                    Você tem <strong>12 pedidos pendentes</strong> e
                    <strong>3 alertas de estoque</strong> para revisar hoje.
                </p>
                <p class="current-date">
                    <time datetime="2026-11-12">Quinta-feira, 12 de novembro de 2026</time>
                </p>
            </div>

            <div class="header-actions">

                <form class="search-form" action="buscar.php" method="get" role="search">
                    <label for="busca" class="visually-hidden">Buscar no sistema</label>
                    <input type="search" id="busca" name="q" placeholder="Buscar pedido, cliente ou flor...">
                    <button type="submit" aria-label="Buscar">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>

                <a href="notificacoes.php" class="notification-link" aria-label="Notificações (5 não lidas)">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="notification-badge">5</span>
                </a>

                <div class="user-profile">
                    <div class="avatar" aria-hidden="true">
                        <!-- Foto do funcionário (opcional) -->
                        <img src="img/funcionario.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Marina Alves</span>
                        <span class="user-role">Atendente • Turno da manhã</span>
                        <a href="login.php" class="logout-link">Sair do Sistema</a>
                    </div>
                </div>

            </div>

        </header>

        <!-- ==========================================================
             ATALHOS RÁPIDOS
        =========================================================== -->
        <section class="quick-actions" aria-labelledby="titulo-acoes">

            <h2 id="titulo-acoes">Ações Rápidas</h2>

            <div class="actions-grid">
                <a href="pedidos-novo.php" class="action-btn primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Novo Pedido
                </a>

                <a href="catalogo-novo.php" class="action-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    Cadastrar Flor
                </a>

                <a href="estoque-entrada.php" class="action-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                    </svg>
                    Entrada de Estoque
                </a>

                <a href="entregas-nova.php" class="action-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg>
                    Agendar Entrega
                </a>
            </div>

        </section>

        <!-- ==========================================================
             CARDS DE RESUMO
        =========================================================== -->
        <section class="quick-stats" aria-labelledby="titulo-resumo">

            <h2 id="titulo-resumo" class="visually-hidden">Resumo do dia</h2>

            <article class="stat-card">
                <div class="stat-icon gold" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Pedidos Pendentes</span>
                    <span class="stat-value">12</span>
                    <span class="stat-trend down">4 aguardando pagamento</span>
                </div>
            </article>

            <article class="stat-card">
                <div class="stat-icon green" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Flores em Estoque</span>
                    <span class="stat-value">847</span>
                    <span class="stat-trend up">+56 desde ontem</span>
                </div>
            </article>

            <article class="stat-card">
                <div class="stat-icon dark" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Vendas Hoje</span>
                    <span class="stat-value">R$ 2.450,00</span>
                    <span class="stat-trend up">+18% vs. ontem</span>
                </div>
            </article>

            <article class="stat-card">
                <div class="stat-icon blue" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Entregas de Hoje</span>
                    <span class="stat-value">7</span>
                    <span class="stat-trend">2 já concluídas</span>
                </div>
            </article>

            <article class="stat-card alert">
                <div class="stat-icon red" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Alertas de Estoque</span>
                    <span class="stat-value">3</span>
                    <span class="stat-trend down">Reposição necessária</span>
                </div>
            </article>

        </section>

        <!-- ==========================================================
             ÚLTIMOS PEDIDOS
        =========================================================== -->
        <section class="content-area" aria-labelledby="titulo-pedidos">

            <div class="content-header">
                <h2 id="titulo-pedidos">Últimos Pedidos Recebidos</h2>
                <div class="content-actions">
                    <a href="pedidos.php" class="btn-link">Ver todos os pedidos</a>
                    <a href="pedidos-novo.php" class="btn-primary">Novo Pedido</a>
                </div>
            </div>

            <div class="table-wrapper">
                <table class="data-table">
                    <caption class="visually-hidden">Lista dos últimos pedidos recebidos</caption>

                    <thead>
                        <tr>
                            <th scope="col">Pedido</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Itens</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Entrega</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>#2051</td>
                            <td>Ana Beatriz Souza</td>
                            <td>Buquê de rosas brancas (12un)</td>
                            <td>R$ 189,90</td>
                            <td>Hoje, 14h00</td>
                            <td><span class="status status-pendente">Pendente</span></td>
                            <td>
                                <a href="pedidos-detalhe.php?id=2051" class="btn-sm">Detalhes</a>
                                <a href="pedidos-aprovar.php?id=2051" class="btn-sm primary">Confirmar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>#2050</td>
                            <td>Carlos Eduardo Lima</td>
                            <td>Arranjo de girassóis + cartão</td>
                            <td>R$ 145,00</td>
                            <td>Hoje, 16h30</td>
                            <td><span class="status status-preparo">Em preparo</span></td>
                            <td>
                                <a href="pedidos-detalhe.php?id=2050" class="btn-sm">Detalhes</a>
                                <a href="pedidos-concluir.php?id=2050" class="btn-sm primary">Concluir</a>
                            </td>
                        </tr>

                        <tr>
                            <td>#2049</td>
                            <td>Juliana Prado</td>
                            <td>Orquídea Phalaenopsis (vaso)</td>
                            <td>R$ 220,00</td>
                            <td>Amanhã, 09h00</td>
                            <td><span class="status status-pago">Pago</span></td>
                            <td>
                                <a href="pedidos-detalhe.php?id=2049" class="btn-sm">Detalhes</a>
                            </td>
                        </tr>

                        <tr>
                            <td>#2048</td>
                            <td>Roberto Nogueira</td>
                            <td>Coroa de flores — luto</td>
                            <td>R$ 480,00</td>
                            <td>Hoje, 18h00</td>
                            <td><span class="status status-urgente">Urgente</span></td>
                            <td>
                                <a href="pedidos-detalhe.php?id=2048" class="btn-sm">Detalhes</a>
                                <a href="entregas-nova.php?pedido=2048" class="btn-sm primary">Despachar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>#2047</td>
                            <td>Fernanda Ribeiro</td>
                            <td>Buquê misto — margaridas e tulipas</td>
                            <td>R$ 165,50</td>
                            <td>12/11, 10h00</td>
                            <td><span class="status status-entregue">Entregue</span></td>
                            <td>
                                <a href="pedidos-detalhe.php?id=2047" class="btn-sm">Detalhes</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

        <!-- ==========================================================
             ALERTAS DE ESTOQUE + TEMPERATURA DA CÂMARA FRIA
        =========================================================== -->
        <div class="two-columns">

            <section class="content-area" aria-labelledby="titulo-estoque">

                <div class="content-header">
                    <h2 id="titulo-estoque">Alertas de Estoque</h2>
                    <a href="estoque.php" class="btn-link">Gerenciar estoque</a>
                </div>

                <ul class="alert-list">
                    <li class="alert-item critical">
                        <div class="alert-text">
                            <strong>Rosas vermelhas</strong>
                            <span>Restam apenas 8 unidades (mínimo: 30)</span>
                        </div>
                        <a href="estoque-entrada.php?item=rosas-vermelhas" class="btn-sm primary">Repor</a>
                    </li>

                    <li class="alert-item warning">
                        <div class="alert-text">
                            <strong>Tulipas holandesas</strong>
                            <span>Restam 14 unidades (mínimo: 25)</span>
                        </div>
                        <a href="estoque-entrada.php?item=tulipas" class="btn-sm">Repor</a>
                    </li>

                    <li class="alert-item warning">
                        <div class="alert-text">
                            <strong>Girassóis</strong>
                            <span>Restam 18 unidades (mínimo: 20)</span>
                        </div>
                        <a href="estoque-entrada.php?item=girassois" class="btn-sm">Repor</a>
                    </li>
                </ul>

            </section>

            <section class="content-area" aria-labelledby="titulo-camara">

                <div class="content-header">
                    <h2 id="titulo-camara">Câmara Fria</h2>
                    <a href="estoque.php" class="btn-link">Ver sensores</a>
                </div>

                <ul class="sensor-list">
                    <li class="sensor-item ok">
                        <span class="sensor-label">Câmara 1 — Flores de corte</span>
                        <span class="sensor-value">4,2 °C</span>
                        <span class="sensor-status">Ideal</span>
                    </li>

                    <li class="sensor-item ok">
                        <span class="sensor-label">Câmara 2 — Arranjos prontos</span>
                        <span class="sensor-value">5,0 °C</span>
                        <span class="sensor-status">Ideal</span>
                    </li>

                    <li class="sensor-item alert">
                        <span class="sensor-label">Câmara 3 — Orquídeas</span>
                        <span class="sensor-value">9,8 °C</span>
                        <span class="sensor-status">Acima do limite</span>
                    </li>
                </ul>

                <p class="sensor-updated">
                    Última leitura automática: <time datetime="2026-11-12T08:45">12/11/2026 às 08:45</time>
                </p>

            </section>

        </div>

        <!-- ==========================================================
             AGENDA DE ENTREGAS DO DIA
        =========================================================== -->
        <section class="content-area" aria-labelledby="titulo-entregas">

            <div class="content-header">
                <h2 id="titulo-entregas">Agenda de Entregas — Hoje</h2>
                <a href="entregas.php" class="btn-link">Ver agenda completa</a>
            </div>

            <div class="table-wrapper">
                <table class="data-table">
                    <caption class="visually-hidden">Entregas agendadas para hoje</caption>

                    <thead>
                        <tr>
                            <th scope="col">Horário</th>
                            <th scope="col">Pedido</th>
                            <th scope="col">Destinatário</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Entregador</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>09h00</td>
                            <td>#2044</td>
                            <td>Marcos Vieira</td>
                            <td>Rua das Acácias, 210 — Centro</td>
                            <td>Diego (Moto 01)</td>
                            <td><span class="status status-entregue">Entregue</span></td>
                        </tr>

                        <tr>
                            <td>11h30</td>
                            <td>#2046</td>
                            <td>Patrícia Almeida</td>
                            <td>Av. Brasil, 1540, apto 72</td>
                            <td>Diego (Moto 01)</td>
                            <td><span class="status status-entregue">Entregue</span></td>
                        </tr>

                        <tr>
                            <td>14h00</td>
                            <td>#2051</td>
                            <td>Ana Beatriz Souza</td>
                            <td>Rua das Palmeiras, 88 — Jardim Sul</td>
                            <td>Lucas (Van 02)</td>
                            <td><span class="status status-preparo">Em rota</span></td>
                        </tr>

                        <tr>
                            <td>16h30</td>
                            <td>#2050</td>
                            <td>Carlos Eduardo Lima</td>
                            <td>Rua Projetada, 45 — Vila Nova</td>
                            <td>Lucas (Van 02)</td>
                            <td><span class="status status-pendente">Aguardando</span></td>
                        </tr>

                        <tr>
                            <td>18h00</td>
                            <td>#2048</td>
                            <td>Roberto Nogueira</td>
                            <td>Capela Memorial — Av. Central, 900</td>
                            <td>A definir</td>
                            <td><span class="status status-urgente">Urgente</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

        <!-- ==========================================================
             RODAPÉ
        =========================================================== -->
        <footer class="dashboard-footer">
            <p>&copy; 2026 TRIFLORA Floricultura — Painel Administrativo</p>
            <nav aria-label="Links do rodapé">
                <a href="suporte.php">Suporte</a>
                <a href="manual.php">Manual do Funcionário</a>
                <a href="politicas.php">Políticas Internas</a>
            </nav>
        </footer>

    </main>

</div>

</body>
</html>