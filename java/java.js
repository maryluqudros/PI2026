/* ============================================================
   TRIFLORA — Lógica da Tela de Login Administrativo
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {
  
  /* ---------- 1. ALTERNÂNCIA DE ABAS ---------- */
  const tabs = document.querySelectorAll('.tab');
  const tabContents = document.querySelectorAll('.tab-content');
  const footerLinks = document.querySelectorAll('[data-tab]');

  function switchTab(targetId) {
    // Remove active de todas as abas e conteúdos
    tabs.forEach(t => {
      t.classList.remove('active');
      t.setAttribute('aria-selected', 'false');
    });
    tabContents.forEach(c => c.classList.remove('active'));

    // Ativa a aba clicada
    const activeTab = document.querySelector(`.tab[data-target="${targetId}"]`);
    const activeContent = document.getElementById(targetId);

    if (activeTab && activeContent) {
      activeTab.classList.add('active');
      activeTab.setAttribute('aria-selected', 'true');
      activeContent.classList.add('active');
    }
  }

  // Evento nos botões das abas
  tabs.forEach(tab => {
    tab.addEventListener('click', () => switchTab(tab.dataset.target));
  });

  // Evento nos links do rodapé
  footerLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      switchTab(link.dataset.tab);
    });
  });


  /* ---------- 2. LÓGICA DOS BOTÕES DE RÁDIO (UNIDADE) ---------- */
  // Como usamos labels customizados, precisamos atualizar a classe '.active' manualmente
  const radioGroups = document.querySelectorAll('.radio-options');

  radioGroups.forEach(group => {
    const labels = group.querySelectorAll('.radio-label');
    
    labels.forEach(label => {
      label.addEventListener('click', () => {
        // Remove active de todos os labels do grupo
        labels.forEach(l => l.classList.remove('active'));
        // Adiciona active apenas no label clicado
        label.classList.add('active');
      });
    });
  });


  /* ---------- 3. MOSTRAR / OCULTAR SENHA ---------- */
  // Seleciona todos os botões de toggle (funciona para login e cadastro)
  const toggleButtons = document.querySelectorAll('.toggle-password');

  toggleButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      // Encontra o input de senha associado a este botão específico
      const input = btn.previousElementSibling;
      
      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);
      
      const icon = btn.querySelector('i');
      icon.classList.toggle('fa-eye');
      icon.classList.toggle('fa-eye-slash');
      
      btn.setAttribute('aria-label', type === 'password' ? 'Mostrar senha' : 'Ocultar senha');
    });
  });


  /* ---------- 4. VALIDAÇÃO DO FORMULÁRIO DE LOGIN ---------- */
  const formLogin = document.getElementById('formLogin');

  if (formLogin) {
    formLogin.addEventListener('submit', (e) => {
      e.preventDefault();

      const identificador = document.getElementById('identificador').value.trim();
      const senha = document.getElementById('senhaLogin').value.trim();
      const unidadeSelecionada = document.querySelector('input[name="unidade_login"]:checked');

      if (!identificador || !senha) {
        alert('⚠️ Por favor, preencha todos os campos obrigatórios.');
        return;
      }

      if (senha.length < 6) {
        alert('⚠️ A senha deve ter no mínimo 6 caracteres.');
        return;
      }

      const nomeUnidade = unidadeSelecionada.value === 'atelie' ? 'Ateliê Principal (Jardins)' : 'Centro de Distribuição';
      
      const btn = formLogin.querySelector('.btn-submit');
      const originalText = btn.innerHTML;
      
      btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Autenticando...';
      btn.disabled = true;

      setTimeout(() => {
        alert(`🌸 Acesso autorizado!\n\nBem-vindo(a) ao Painel Administrativo Triflora.\nSetor: ${nomeUnidade}\n\n(Simulação de login)`);
        btn.innerHTML = originalText;
        btn.disabled = false;
        formLogin.reset();
        
        // Restaura o estado visual do radio button após reset
        const firstRadio = document.querySelector('input[name="unidade_login"][value="atelie"]');
        if(firstRadio) {
           document.querySelectorAll('input[name="unidade_login"]').forEach(r => r.closest('.radio-label').classList.remove('active'));
           firstRadio.closest('.radio-label').classList.add('active');
        }
      }, 1200);
    });
  }


  /* ---------- 5. VALIDAÇÃO DO FORMULÁRIO DE CADASTRO ---------- */
  const formRegistro = document.getElementById('formRegistro');

  if (formRegistro) {
    formRegistro.addEventListener('submit', (e) => {
      e.preventDefault();

      const nome = document.getElementById('nomeCompleto').value.trim();
      const email = document.getElementById('emailReg').value.trim();
      const matricula = document.getElementById('matriculaReg').value.trim();
      const senha = document.getElementById('senhaReg').value.trim();
      const unidadeSelecionada = document.querySelector('input[name="unidade_registro"]:checked');

      if (!nome || !email || !matricula || !senha) {
        alert('⚠️ Preencha todos os campos obrigatórios para solicitar o cadastro.');
        return;
      }

      if (senha.length < 6) {
        alert('⚠️ A senha deve ter no mínimo 6 caracteres.');
        return;
      }

      const nomeUnidade = unidadeSelecionada.value === 'atelie' ? 'Ateliê Principal (Jardins)' : 'Centro de Distribuição';

      alert(`📝 Solicitação enviada!\n\nNome: ${nome}\nSetor: ${nomeUnidade}\n\nSeus dados foram encaminhados ao administrador.\nEm breve você receberá um e-mail em ${email} com as instruções.`);
      
      formRegistro.reset();
      
      // Restaura o estado visual do radio button após reset
      const firstRadio = document.querySelector('input[name="unidade_registro"][value="atelie"]');
      if(firstRadio) {
          document.querySelectorAll('input[name="unidade_registro"]').forEach(r => r.closest('.radio-label').classList.remove('active'));
          firstRadio.closest('.radio-label').classList.add('active');
      }
    });
  }

});