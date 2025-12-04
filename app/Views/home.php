<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Sprouty - Home</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700&display=swap" rel="stylesheet">

  <style>
    /* === RESET BÁSICO === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Nunito', sans-serif;
    }

    body {
      background-color: #f9f9f9;
      color: #333;
    }

    ul {
      list-style: none;
    }

    a {
      text-decoration: none;
      transition: 0.3s;
    }

    /* === BARRA SUPERIOR (Super Info) === */
    /* Estilo verde escuro igual ao topo do dashboard */
    .super-info-bg {
      background-color: #1b4d2e; /* Verde Escuro */
      color: white;
      padding: 10px 0;
      font-size: 0.9rem;
    }

    .super-info {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      flex-wrap: wrap;
    }

    .super-info p, .super-info a {
      color: #fff;
      margin: 0 10px;
    }
    
    .super-info a:hover {
      text-decoration: underline;
    }

    /* === MENU PRINCIPAL === */
    /* Estilo verde Sprouty */
    .menu-bg {
      background-color: #2e7d32; /* Verde padrão Sprouty */
      padding: 15px 0;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .menu {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }

    .menu-logo a {
      font-size: 1.8rem;
      font-weight: 700;
      color: #ffffff; /* Logo Branco */
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .menu-nav ul {
      display: flex;
      gap: 25px;
    }

    .menu-nav a {
      color: #ffffff; /* Links Brancos */
      font-weight: 600;
      font-size: 1.1rem;
    }

    .menu-nav a:hover {
      color: #a5d6a7; /* Verde claro no hover */
    }

    /* === INTRODUÇÃO === */
    .introducao {
      text-align: center;
      padding: 60px 20px;
      color: #1b4d2e;
      font-size: 2.5rem;
      line-height: 1.2;
    }

    /* === SEÇÕES GERAIS === */
    section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    h1, h2 {
      color: #2e7d32;
      margin-bottom: 20px;
    }

    /* === SOBRE === */
    .sobre {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: center;
    }

    .sobre-info h1 {
      font-size: 2.5rem;
    }

    .sobre-info p {
      margin-bottom: 15px;
      line-height: 1.6;
      color: #555;
    }

    .sobre-img img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    /* Layout para as duas imagens ficarem bonitas se houver grid */
    .sobre-imagens-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }

    /* === QUALIDADE (GRID DE CARDS) === */
    .qualidade {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      text-align: center;
    }

    .qualidade-item {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      border-top: 5px solid #2e7d32;
      transition: transform 0.3s;
    }

    .qualidade-item:hover {
      transform: translateY(-5px);
    }

    .qualidade-item h2 {
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    /* === PLANOS (PRODUTOS) === */
    .produtos h1 {
      text-align: center;
      font-size: 2.5rem;
    }

    .produtos-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .produtos-item {
      flex: 1;
      min-width: 250px;
      text-align: center;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .produtos-item h2 {
      padding: 15px;
      margin: 0;
      color: white;
    }

    .produtos-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    /* Cores dos Cards de Produtos */
    .purple h2 { background-color: #532f06ff; }
    .pink h2 { background-color: #e91e63; }
    .blue h2 { background-color: #88cc3aff; }

    /* === PREÇOS === */
    .preco {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      text-align: center;
    }

    .preco-item {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      flex: 1;
      min-width: 280px;
      border: 1px solid #eee;
    }

    .preco-item span {
      display: block;
      font-size: 3rem;
      font-weight: bold;
      color: #333;
      margin: 20px 0;
    }

    .preco-item ul {
      text-align: left;
      margin-bottom: 30px;
    }

    .preco-item li {
      margin-bottom: 10px;
      color: #666;
    }

    .preco-item a {
      display: inline-block;
      padding: 10px 30px;
      background-color: #2e7d32;
      color: white;
      border-radius: 25px;
      font-weight: bold;
    }

    .preco-item a:hover {
      background-color: #1b4d2e;
    }

    /* === NEWSLETTER === */
    .newsletter {
      background-color: #f1f8e9;
      text-align: center;
      padding: 60px 20px;
      border-radius: 20px;
      margin-bottom: 40px;
    }

    .newsletter-form {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .newsletter-form input {
      padding: 15px;
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .newsletter-form button {
      padding: 15px 30px;
      background-color: #2e7d32;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    /* === RODAPÉ === */
    .footer {
      background-color: #1b4d2e;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

    /* Responsividade simples para telas menores */
    @media (max-width: 768px) {
      .super-info {
        flex-direction: column;
        text-align: center;
        gap: 5px;
      }
      .menu {
        flex-direction: column;
        gap: 15px;
      }
      .sobre {
        grid-template-columns: 1fr;
      }
      .produtos-container, .preco {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>

  <div class="super-info-bg">
    <div class="super-info">
      <p>Seg / Sex - 07:00 às 15:00</p>
      <a href="tel:+552199999999">+55 19 9999-9999</a>
      <p>Av. Tom Traugott Wildi, 100 – Praia Brava, Florianópolis – SC</p>
    </div>
  </div>

  <header class="menu-bg"> 
    <div class="menu">
      <div class="menu-logo">
        <a href="#">Sprouty 🌱</a>
      </div>

      <nav class="menu-nav">
        <ul>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#produtos">Planos</a></li>
          <li><a href="#preco">Preço</a></li>
          <li><a href="#qualidade">Contribuições</a></li>
          <li><a href="\dashboard">Dashboard</a></li>
        </ul>
      </nav>
      
    </div>
  </header>

  <h1 class="introducao">Novos valores e<br>Práticas Sustentáveis</h1>

  <section class="sobre" id="sobre">
    
    <div class="sobre-info">
      <h1>Sobre</h1>

      <p>Na Sprouty, acreditamos que a sustentabilidade não é apenas um diferencial — é uma necessidade. Nossa
         missão é ajudar empresas a se alinharem com padrões e políticas sustentáveis, promovendo práticas que respeitem
         tanto os ecossistemas terrestres quanto os marinhos.</p>

      <p>Oferecemos soluções estratégicas e personalizadas que facilitam a transição para modelos de operação mais
        conscientes, responsáveis e em conformidade com as diretrizes ambientais nacionais e internacionais.</p>

      <p>Trabalhamos com base em dados científicos, tecnologia e uma rede de especialistas em biologia terrestre e
         marinha, garantindo que cada passo em direção à sustentabilidade seja eficaz.</p>
    </div>

    <div class="sobre-imagens-container">
        <div class="sobre-img">
            <img src="/imgs/sobre-1.jpg" alt="Trabalho de campo">
        </div>
        <div class="sobre-img">
            <img src="/imgs/sobre-2.jpg" alt="Natureza preservada">
        </div>
    </div>
    
  </section>

  <section class="produtos" id="produtos">
    <h1>Planos</h1>

    <div class="produtos-container">

      <div class="produtos-item purple">
        <h2>Terra</h2>
        <img src="/imgs/produtos-1.jpg" alt="Produtos Terra">
      </div>

      <div class="produtos-item pink">
        <h2>Mar</h2>
        <img src="/imgs/produtos-2.jpg" alt="Produtos Mar">
      </div>

      <div class="produtos-item blue">
        <h2>Gaia</h2>
        <img src="/imgs/produtos-3.jpg" alt="Produtos Gaia">
      </div>
    </div>
  </section>

  <section class="preco" id="preco">

    <div class="preco-item">
      <h2>Verde</h2>
      <span><sup>R$</sup>19</span>
      <ul>
        <li>🌱 Apoie o plantio de árvores</li>
        <li>♻️ Receba boletins sobre sustentabilidade</li>
        <li>💬 Acesso à comunidade ecológica</li>
      </ul>
      <a href="#">Comprar</a>
    </div>

    <div class="preco-item">
      <h2>Mar</h2>
      <span><sup>R$</sup>39</span>
      <ul>
        <li>🌱 Apoie Plantio <br>+ Reciclagem Comunitária</li>
        <li>🌊 Contribua com a Biologia Marinha!</li>
        <li>🌍 Certificado digital ecológico</li>
        <li>🎓 Cursos e e-books ambientais</li>
      </ul>
      <a href="#">Comprar</a>
    </div>

    <div class="preco-item">
      <h2>Gaia</h2>
      <span><sup>R$</sup>79</span>
      <ul>
        <li>🌲 Todos os benefícios anteriores!</li>
        <li>🌳 Plantio + compensação de CO₂</li>
        <li>🌞 Apoio a energia solar</li>
        <li>🏆 Selo de Membro Ouro Sustentável</li>
        <li>📥 Download de Itens Exclusivos</li>
      </ul>
      <a href="#">Comprar</a>
    </div>

  </section>


  <section class="qualidade" id="qualidade">

    <div class="qualidade-item">
      <h2>Planejamento</h2>
      <p>Criamos estratégias ambientais que unem dados da biologia terrestre e marinha para orientar decisões mais seguras, eficazes e sustentáveis.</p>
    </div>

    <div class="qualidade-item">
      <h2>Soluções</h2>
      <p>Desenvolvemos planos personalizados que se adaptam às particularidades de cada setor, reduzindo impactos em habitats terrestres e marinhos.</p>
    </div>

    <div class="qualidade-item">
      <h2>Eficiência</h2>
      <p>Ajudamos empresas a economizar recursos naturais e financeiros, integrando práticas de preservação de solos, florestas, oceanos e zonas costeiras.</p>
    </div>

    <div class="qualidade-item">
      <h2>Gestão</h2>
      <p>Garantimos total visibilidade das ações sustentáveis, com relatórios e indicadores claros sobre os impactos e avanços ambientais — reduzindo impactos ambientais na terra e no mar.</p>
    </div>

    <div class="qualidade-item">
      <h2>Monitoramento</h2>
      <p>Identificamos áreas críticas de risco ecológico — como contaminação de solos ou degradação de recifes — e atuamos com planos de mitigação imediata.</p>
    </div>

    <div class="qualidade-item">
      <h2>Compromisso</h2>
      <p>Guiamos empresas rumo à certificação e conformidade ambiental, com foco na preservação da biodiversidade terrestre e marinha a longo prazo.</p>
    </div>
  </section>

  <section class="newsletter" id="newsletter">

    <div class="newsletter-info">
      <h1>Newsletter</h1>
      <p>assine e fique por dentro das novidades</p>
    </div>

    <form class="newsletter-form">
      <input type="text" placeholder="Seu e-mail">
      <button type="submit">Assinar</button>
    </form>

  </section>

  <footer class="footer">
    <p>Sprouty © Todos os direitos reservados. - Desenvolvido por Fernando Bernini e Renan Santos</p> 
  </footer>

</body>
</html>