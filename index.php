<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TRIFLORA · Acesso Administrativo</title>
  <meta name="description" content="Sistema Integrado de Gestão Triflora. Acesso restrito para colaboradores." />

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@400;500;600&display=swap"
    rel="stylesheet">

  <!-- Ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <main class="login-container">

    <!-- ============ COLUNA ESQUERDA (BRANDING) ============ -->
    <section class="brand-panel" aria-label="Informações do sistema">
      <div class="brand-content">

        <div class="badge-system">
          <i class="fa-solid fa-lock" aria-hidden="true"></i>
          <span>Sistema Integrado de Gestão</span>
        </div>

        <h1 class="brand-title">
          Gerencie flores,<br>
          pedidos e carinho com<br>
          <em>excelência.</em>
        </h1>

        <p class="brand-subtitle">
          Acesso exclusivo para atendentes, floristas, estoquistas, gerentes e administradores da TRIFLORA.
        </p>

        <ul class="role-list">
          <li>
            <div class="role-icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></div>
            <div class="role-text">
              <strong>Administrador</strong>
              <span>Acesso irrestrito a financeiro, equipe e relatórios</span>
            </div>
          </li>
          <li>
            <div class="role-icon"><i class="fa-solid fa-store" aria-hidden="true"></i></div>
            <div class="role-text">
              <strong>Gerente &amp; Florista</strong>
              <span>Controle de catálogo, pedidos e arranjos artesanais</span>
            </div>
          </li>
          <li>
            <div class="role-icon"><i class="fa-solid fa-box-open" aria-hidden="true"></i></div>
            <div class="role-text">
              <strong>Estoquista &amp; Entregas</strong>
              <span>Câmara fria, validade de flores e despacho de rotas</span>
            </div>
          </li>
        </ul>

        <div class="brand-footer">
          <span><i class="fa-solid fa-lock" aria-hidden="true"></i> Conexão TLS 1.3 Criptografada</span>
          <span>Versão 2.4.0</span>
        </div>

      </div>
    </section>

    <!-- ============ COLUNA DIREITA (FORMULÁRIO) ============ -->
    <section class="form-panel" aria-label="Formulário de acesso">

      <!-- Abas -->
      <div class="tabs" role="tablist">
        <button class="tab active" role="tab" aria-selected="true" aria-controls="login" data-target="login">
          <i class="fa-solid fa-arrow-right-to-bracket" aria-hidden="true"></i> Entrar no Sistema
        </button>
        <button class="tab" role="tab" aria-selected="false" aria-controls="registro" data-target="registro">
          <i class="fa-solid fa-user-plus" aria-hidden="true"></i> Cadastrar Funcionário
        </button>
      </div>

      <!-- Aba: LOGIN -->
      <div class="tab-content active" id="login" role="tabpanel">
        <h2 class="form-title">Boas-vindas, colaborador</h2>
        <p class="form-subtitle">Informe seu e-mail corporativo ou matrícula e sua senha de acesso.</p>

        <form id="formLogin" novalidate>

        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'login') {
            echo '<div class="mensagem erro">Login invalido.
        Verifique email e senha.</div>';
        }
        ?>

          <div class="input-group">
            <label for="identificador">E-mail Corporativo ou Matrícula <span class="required"
                aria-hidden="true">*</span></label>
            <div class="input-wrapper">
              <i class="fa-regular fa-envelope input-icon" aria-hidden="true"></i>
              <input type="text" id="identificador" placeholder="exemplo@floricultura.com.br ou #FUNC-104" required
                aria-required="true" />
            </div>
          </div>

          <div class="input-group">
            <div class="label-row">
              <label for="senhaLogin">Senha de Acesso <span class="required" aria-hidden="true">*</span></label>
              <a href="#" class="forgot-link">Esqueceu a senha?</a>
            </div>
            <div class="input-wrapper">
              <i class="fa-solid fa-lock input-icon" aria-hidden="true"></i>
              <input type="password" id="senhaLogin" placeholder="••••••••••••" required aria-required="true" />
              <button type="button" class="toggle-password" aria-label="Mostrar senha">
                <i class="fa-regular fa-eye" aria-hidden="true"></i>
              </button>
            </div>
          </div>

          <fieldset class="unidade-group">
            <legend>Unidade / Setor de Trabalho</legend>
            <div class="radio-options">
              <label class="radio-label active">
                <input type="radio" name="unidade_login" value="atelie" checked />
                <span class="custom-radio"></span>
                Ateliê Principal (Jardins)
              </label>
              <label class="radio-label">
                <input type="radio" name="unidade_login" value="centro" />
                <span class="custom-radio"></span>
                Centro de Distribuição
              </label>
            </div>
          </fieldset>

          <button type="submit" class="btn-submit">
            <i class="fa-solid fa-arrow-right-to-bracket" aria-hidden="true"></i> Entrar no Painel Administrativo
          </button>

        </form>

        <div class="form-footer">
          <span>Precisa de um novo cadastro?</span>
          <a href="#" class="footer-link" data-tab="registro">Cadastrar novo funcionário</a>
        </div>
      </div>

      <!-- Aba: CADASTRO (oculta por padrão) -->
      <div class="tab-content" id="registro" role="tabpanel">
        <h2 class="form-title">Novo Funcionário</h2>
        <p class="form-subtitle">Solicite o cadastro junto ao administrador do sistema.</p>

        <form id="formRegistro" novalidate>
          <?php
          if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
            echo '<div class="mensagem-erro">Este email já está cadastrado. Por favor, tente novamente.</div>';
          }
          ?>

          <div class="input-group">
            <label for="nomeCompleto">Nome Completo <span class="required" aria-hidden="true">*</span></label>
            <div class="input-wrapper">
              <i class="fa-regular fa-user input-icon" aria-hidden="true"></i>
              <input type="text" id="nomeCompleto" placeholder="Seu nome completo" required aria-required="true" />
            </div>
          </div>

          <div class="input-group">
            <label for="emailReg">E-mail Corporativo <span class="required" aria-hidden="true">*</span></label>
            <div class="input-wrapper">
              <i class="fa-regular fa-envelope input-icon" aria-hidden="true"></i>
              <input type="email" id="emailReg" placeholder="seu.nome@floricultura.com.br" required
                aria-required="true" />
            </div>
          </div>

          <div class="input-group">
            <label for="matriculaReg">Matrícula <span class="required" aria-hidden="true">*</span></label>
            <div class="input-wrapper">
              <i class="fa-solid fa-id-badge input-icon" aria-hidden="true"></i>
              <input type="text" id="matriculaReg" placeholder="#FUNC-000" required aria-required="true" />
            </div>
          </div>

          <!-- NOVO CAMPO: SENHA NO CADASTRO -->
          <div class="input-group">
            <label for="senhaReg">Senha de Acesso <span class="required" aria-hidden="true">*</span></label>
            <div class="input-wrapper">
              <i class="fa-solid fa-lock input-icon" aria-hidden="true"></i>
              <input type="password" id="senhaReg" placeholder="Crie uma senha forte" required aria-required="true" />
              <button type="button" class="toggle-password" aria-label="Mostrar senha">
                <i class="fa-regular fa-eye" aria-hidden="true"></i>
              </button>
            </div>
          </div>

          <!-- NOVO CAMPO: UNIDADE NO CADASTRO -->
          <fieldset class="unidade-group">
            <legend>Unidade / Setor de Trabalho</legend>
            <div class="radio-options">
              <label class="radio-label active">
                <input type="radio" name="unidade_registro" value="atelie" checked />
                <span class="custom-radio"></span>
                Ateliê Principal (Jardins)
              </label>
              <label class="radio-label">
                <input type="radio" name="unidade_registro" value="centro" />
                <span class="custom-radio"></span>
                Centro de Distribuição
              </label>
            </div>
          </fieldset>

          <button type="submit" class="btn-submit">
            <i class="fa-solid fa-check" aria-hidden="true"></i> Solicitar Cadastro
          </button>

        </form>

        <div class="form-footer">
          <span>Já possui acesso?</span>
          <a href="#" class="footer-link" data-tab="login">Voltar para o login</a>
        </div>
      </div>

    </section>

  </main>

  <script src="java/java.js"></script>
</body>

</html>