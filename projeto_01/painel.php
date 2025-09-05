<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Novo Site</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);
      color: #333;
    }

    header {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(6px);
      text-align: center;
      padding: 50px 20px;
      color: white;
    }

    header h1 {
      margin: 0;
      font-size: 3rem;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 20px;
      padding: 15px;
      background: rgba(0,0,0,0.2);
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
      cursor: pointer;
    }

    nav a:hover {
      color: yellow;
    }

    main {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
    }

    section {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }

    section:hover {
      transform: scale(1.03);
    }

    h2 {
      margin-top: 0;
      color: #4a4ae2;
    }

    footer {
      text-align: center;
      padding: 15px;
      background: rgba(0,0,0,0.3);
      color: white;
      margin-top: 30px;
    }

    /* Seção de notas */
    #notas {
      display: none; /* inicialmente escondido */
    }

    form label {
      display: block;
      margin: 10px 0 5px;
    }

    form input[type="text"], form input[type="number"] {
      width: 100%;
      padding: 8px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    form input[type="submit"] {
      width: 100%;
      padding: 10px;
      background: #4a4ae2;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    form input[type="submit"]:hover {
      background: #3737b8;
    }

    .resultado {
      margin-top: 15px;
      background: #f0f0f0;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>🌐 Meu Novo Site</h1>
    <p>Um visual moderno e colorido para você!</p>
  </header>

  <nav>
    <a onclick="mostrarSecao('sobre')">Sobre</a>
    <a onclick="mostrarSecao('projetos')">Projetos</a>
    <a onclick="mostrarSecao('contato')">Contato</a>
    <a onclick="mostrarSecao('notas')">Lançar Notas</a>
  </nav>

  <main>
    <section id="sobre">
      <h2>Sobre</h2>
      <p>Este site foi feito para mostrar como um layout simples pode ficar moderno usando HTML e CSS.</p>
    </section>

    <section id="projetos">
      <h2>Projetos</h2>
      <p>Aqui você pode adicionar informações sobre seus trabalhos, estudos ou portfólio.</p>
    </section>

    <section id="contato">
      <h2>Contato</h2>
      <p>Email: <strong>exemplo@email.com</strong></p>
      <p>📱 WhatsApp: (11) 99999-9999</p>
    </section>

    <section id="notas">
      <h2>Lançar Notas</h2>
      <form id="formNotas">
        <label>Nome do Aluno:</label>
        <input type="text" id="nome" required>

        <label>Nota 1:</label>
        <input type="number" id="nota1" step="0.01" required>

        <label>Nota 2:</label>
        <input type="number" id="nota2" step="0.01" required>

        <label>Nota 3:</label>
        <input type="number" id="nota3" step="0.01" required>

        <input type="submit" value="Calcular Média">
      </form>
      <div id="resultado" class="resultado"></div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 - Criado por Flávio</p>
  </footer>

  <script>
    // Função para mostrar apenas a seção desejada
    function mostrarSecao(id) {
      const secoes = document.querySelectorAll('main section');
      secoes.forEach(secao => secao.style.display = 'none');
      document.getElementById(id).style.display = 'block';
    }

    // Formulário de notas
    document.getElementById('formNotas').addEventListener('submit', function(e) {
      e.preventDefault();
      const nome = document.getElementById('nome').value;
      const nota1 = parseFloat(document.getElementById('nota1').value);
      const nota2 = parseFloat(document.getElementById('nota2').value);
      const nota3 = parseFloat(document.getElementById('nota3').value);

      const media = ((nota1 + nota2 + nota3) / 3).toFixed(2);
      let status = '';
      if(media >= 7) status = 'Aprovado ✅';
      else if(media >=4) status = 'Recuperação ⚠️';
      else status = 'Reprovado ❌';

      document.getElementById('resultado').innerHTML = `
        <p>Aluno: <strong>${nome}</strong></p>
        <p>Média: <strong>${media}</strong></p>
        <p style="font-weight:bold;">${status}</p>
      `;
    });

    // Inicialmente mostra a seção "Sobre"
    mostrarSecao('sobre');
  </script>
</body>
</html>
<?php
// gerador de log de acesso
file_put_contents("log.txt",
"usuario acessou em " .
date("d/m/Y H:i:s") . 
"\n", FILE_APPEND);
?>