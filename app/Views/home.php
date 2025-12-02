<!DOCTYPE html>
<html lang="pt-br"> <!-- Define idioma da página -->

<head>
  <meta charset="UTF-8"> <!-- Suporte a acentuação -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade em mobile -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Compatibilidade com IE -->
  
  <title><?=$title?></title> <!-- Título dinâmico vindo do PHP -->

  <!-- Fonte usada no site -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700&display=swap" rel="stylesheet">

  <!-- Reset de CSS (remove estilos padrão dos navegadores) -->
  <link rel="stylesheet" type="text/css" href="/css/reset.css">

  <!-- Arquivo principal de estilos -->
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

  <!-- Barra superior com informações de funcionamento -->
  <div class="super-info-bg">
    <div class="super-info">
      <p>Seg / Sex - 07:00 às 15:00</p>
      <a href="tel:+552199999999">+55 19 9999-9999</a> <!-- Link para discagem -->
      <p>Av. Tom Traugott Wildi, 100 – Praia Brava, Florianópolis – SC</p>
    </div>
  </div>

  <!-- Cabeçalho + menu principal -->
  <header class="menu-bg"> 
    <div class="menu">
      <div class="menu-logo">
        <a href="#">Sprouty 🌱</a> <!-- Logotipo -->
      </div>

      <!-- Navegação principal do site -->
      <nav class="menu-nav">
        <ul>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#produtos">Planos</a></li>
          <li><a href="#preco">Preço</a></li>
          <li><a href="#qualidade">Contribuições</a></li>
        </ul>
      </nav>
     
    </div>
  </header>

  <!-- Título principal da página -->
  <h1 class="introducao">Novos valores e<br>Práticas Sustentáveis</h1>

  <!-- Seção SOBRE -->
  <section class="sobre" id="sobre">
    
    <div class="sobre-info">
      <h1>Sobre</h1>

      <!-- Parágrafos informativos -->
      <p>Na Sprouty, acreditamos que a sustentabilidade (...) marinhos.</p>
      <p>Oferecemos soluções estratégicas (...) ambientais.</p>
      <p>Trabalhamos com base em dados científicos (...) duradouro.</p>
    </div>

    <!-- Duas imagens laterais da seção -->
    <div class="sobre-img">
      <img src="/imgs/sobre-1.jpg" alt="Sobre 1">
    </div>
    <div class="sobre-img">
      <img src="/imgs/sobre-2.jpg" alt="Sobre 2">
    </div>

    
  </section>

  <!-- Seção de PLANOS/PRODUTOS -->
  <section class="produtos" id="produtos">
    <h1>Planos</h1>

    <div class="produtos-container">

      <!-- Item 1 -->
      <div class="produtos-item purple">
        <h2>Terra</h2>
        <img src="/imgs/produtos-1.jpg" alt="Produtos 1">
      </div>

      <!-- Item 2 -->
      <div class="produtos-item pink">
        <h2>Mar</h2>
        <img src="/imgs/produtos-2.jpg" alt="Produtos 2">
      </div>

      <!-- Item 3 -->
      <div class="produtos-item blue">
        <h2>Gaia</h2>
        <img src="/imgs/produtos-3.jpg" alt="Produtos 3">
      </div>
    </div>
  </section>

  <!-- Tabela de preços -->
  <section class="preco" id="preco">

    <!-- Plano Verde -->
    <div class="preco-item">
      <h2>Verde</h2>
      <span><sup>R$</sup>19</span> <!-- Preço -->
      <ul>
        <li>🌱 Apoie o plantio de árvores</li>
        <li>♻️ Receba boletins sobre sustentabilidade</li>
        <li>💬 Acesso à comunidade ecológica</li>
      </ul>
      <a href="#">Comprar</a>
    </div>

    <!-- Plano Mar -->
    <div class="preco-item">
      <h2>Mar</h2>
      <span><sup>R$</sup>39</span>
      <ul>
        <li>🌱 Apoie Plantio <br>+ Reciclagem Comunitária</li>
        <li>🌱 Contribua com a Biologia Marinha!</li>
        <li>🌍 Certificado digital ecológico</li>
        <li>🎓 Cursos e e-books ambientais</li>
      </ul>
      <a href="#">Comprar</a>
    </div>

    <!-- Plano Gaia -->
    <div class="preco-item">
      <h2>Gaia</h2>
      <span><sup>R$</sup>79</span>
      <ul>
        <li>🌲Todos os benefícios anteriores!</li>
        <li>🌳 Plantio + compensação de CO₂</li>
        <li>🌞 Apoio a energia solar</li>
        <li>🏆 Selo de Membro Ouro Sustentável</li>
        <li>📥Download de Itens</li>
      </ul>
      <a href="#">Comprar</a>
    </div>

    
  </section>

  <!-- Seção sobre a qualidade e pilares do serviço -->
  <section class="qualidade" id="qualidade">

    <!-- Os cards são repetidos — cada um destaca um benefício -->
    <div class="qualidade-item">
      <h2>Planejamento</h2>
      <p>Criamos estratégias ambientais (...) sustentáveis.</p>
    </div>

    <div class="qualidade-item">
      <h2>Soluções</h2>
      <p>Desenvolvemos planos personalizados (...) marinhos.</p>
    </div>

    <div class="qualidade-item">
      <h2>Eficiência</h2>
      <p>Ajudamos empresas a economizar recursos (...) costeiras.</p>
    </div>

    <div class="qualidade-item">
      <h2>Gestão</h2>
      <p>Garantimos total visibilidade (...) ambientais.</p>
    </div>

    <div class="qualidade-item">
      <h2>Monitoramento</h2>
      <p>Identificamos áreas críticas (...) mitigação imediata.</p>
    </div>

    <div class="qualidade-item">
      <h2>Compromisso</h2>
      <p>Guiamos empresas rumo à certificação (...) a longo prazo.</p>
    </div>
  </section>

  <!-- Formulário simples de newsletter -->
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

  <!-- Rodapé -->
  <footer class="footer">
    <p>Sprouty © Todos os direitos reservados. - Desenvolvido por Fernando Bernini e Renan Santos</p> 
  </footer>

</body>
</html>