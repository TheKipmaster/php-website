<?php
use Prismic\Dom\Link;
use Prismic\Dom\RichText;

$prismic = $WPGLOBAL['prismic'];
$pageContent = $WPGLOBAL['pageContent'];
$menuContent = $WPGLOBAL['menuContent'];

$title = SITE_TITLE;
$isHomepage = true;

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8" />
    <!-- Media Query -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- <meta name="keywords" content="dentista, clareamento, lentes de contato dental"> -->
    <!-- <meta name="robots" content="index,follow"> -->
    <!-- <meta name="description" content="centro integrado de reabilitação oral e odontologia especializada" /> -->

    <title>Aquarela Odontologia Digital</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="/stylesheets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/stylesheets/style.css" />
    <!-- Carousel styles -->
    <link rel="stylesheet" href="/javascript/flickity.min.css">

    <!-- Minified CSS -->
    <!-- <link rel="stylesheet" href="/stylesheets/index-5c180860b116b1aa8b39110c82abab73.min.css"> -->

    <!-- Page Icon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="/img/title-logo.png" /> -->

  </head>

  <body id="page-top">

    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner diagonal part-1"></div>
      <div class="spinner horizontal"></div>
      <div class="spinner diagonal part-2"></div>
    </label>

    <div id="sidebarMenu">
      <ul class="sidebarMenuInner">
        <li>Navegação</li>
        <li><a href="#intro">Início</a></li>
        <li><a href="#treatments">Tratamentos</a></li>
        <li><a href="#different">Nossos Diferenciais</a></li>
        <li><a href="#team">Quem Somos</a></li>
        <li><a href="#testimonies">Depoimentos</a></li>
      </ul>
    </div>

    <nav>
      <div class="logo">
        <img src="/images/logo-cabeçalho.png" alt="">
      </div>
      <div class="not-logo">
        <div class="contact">
          <i class="fas fa-phone-alt"></i>
          <div class="phone-numbers">
            <div>
              <span class="location">Brasília Shppping</span>
              <a class="number" href="tel:+55-61-3327-0523">(61) 3327-0523</a>
            </div>
            <div>
              <span class="location">Taguatinga</span>
              <a class="number" href="tel:+55-61-3352-5735">(61) 3352-5735</a>
            </div>
          </div>
        </div>
        <ul class="navigation">
          <a href="#treatments">
            <li>Tratamentos</li>
          </a>
          <a href="#different">
            <li>Nossos Diferenciais</li>
          </a>
          <a href="#team">
            <li>Quem Somos</li>
          </a>
          <a href="#testimonies">
            <li>Depoimentos</li>
          </a>
        </ul>
      </div>
    </nav>

    <section class="intro" id="intro">
      <h1>
        <%= PrismicDOM.RichText.asText(intro.data.title) %>
      </h1>
      <h2>
        <%= PrismicDOM.RichText.asText(intro.data.subtitle) %>
      </h2>
      <p>
        <%= PrismicDOM.RichText.asText(intro.data.body) %>
      </p>

      <div class="stars">
        <div class="star">
          <div class="star-icon"><img src="/images/star.png" alt=""></div>
          <span><%= intro.data.star1 %></span>
        </div>
        <div class="star">
          <div class="star-icon"><img src="/images/star.png" alt=""></div>
          <span><%= intro.data.star2 %></span>
        </div>
        <div class="star">
          <div class="star-icon"><img src="/images/star.png" alt=""></div>
          <span><%= intro.data.star3 %></span>
        </div>
        <div class="star">
          <div class="star-icon"><img src="/images/star.png" alt=""></div>
          <span><%= intro.data.star4 %></span>
        </div>
        <div class="star">
          <div class="star-icon"><img src="/images/star.png" alt=""></div>
          <span><%= intro.data.star5 %></span>
        </div>
        <div class="star">
          <div class="star-icon"><img src="/images/star.png" alt=""></div>
          <span><%= intro.data.star6 %></span>
        </div>
      </div>

      <div class="call-to-action">
        <div class="callout">Agende agora <br> uma consulta!</div>
          <div class="form">
            <input type="text" id="name1" name="name" placeholder="Nome">
            <input type="text" id="phone1" name="phone" placeholder="Whatsapp">
            <input type="text" id="treatment1" name="treatment" placeholder="Tratamento">
            <button id="1">ENVIAR</button>
          </div>
      </div>

      <div class="compliments">
        <div class="compliment">
          <div class="compliment-icon"><img src="/images/melhores-profissionais.png" alt=""></div>
          <span>Os Melhores Profissionais</span>
        </div>
        <div class="compliment">
          <div class="compliment-icon"><img src="/images/tecnologia-de-ponta.png" alt=""></div>
          <span>Tecnologia de Ponta</span>
        </div>
        <div class="compliment">
          <div class="compliment-icon"><img src="/images/tratamento-personalizado.png" alt=""></div>
          <span>Tratamento Personalizado</span>
        </div>
        <div class="compliment">
          <div class="compliment-icon"><img src="/images/melhor-localização.png" alt=""></div>
          <span>Melhor Localização</span>
        </div>
      </div>

      <div class="signboard">
        <a class="whatsapp" href="https://api.whatsapp.com/send?phone=556182870986&text=Ol%C3%A1!%20Sou%20-%2C %20gostaria%20de%20agendar%20uma%20avalia%C3%A7%C3%A3o%20para%20-">
          <i class="fab fa-whatsapp"></i>
          <span>Taguatinga <br> Trade Center</span>
        </a>
        <div class="sign">
          <span>Horário de Atendimento</span>
          <span class="neon">Segunda - Sexta | 8h - 18h</span>
        </div>
        <a class="whatsapp" href="https://api.whatsapp.com/send?phone=556191875504&text=Ol%C3%A1!%20Sou%20-%2C %20gostaria%20de%20agendar%20uma%20avalia%C3%A7%C3%A3o%20para%20-">
          <i class="fab fa-whatsapp"></i>
          <span>Brasília <br> Shopping</span>
        </a>
      </div>
    </section>

    <section class="treatments" id="treatments">
      <h1>Tratamentos</h1>

      <div class="gallery js-flickity">
        <% treatments.map(treatment => { %>
          <a href="<%= treatment.data.link.url %>" class="gallery-cell">
            <img src="<%= treatment.data.picture.url %>" alt="<%= PrismicDOM.RichText.asText(treatment.data.name) %>"></img>
            <button><%= PrismicDOM.RichText.asText(treatment.data.name) %></button>
          </a>
        <% }) %>
      </div>

      <a class="callout" href="https://api.whatsapp.com/send?phone=556191875504&text=Ol%C3%A1!%20Sou%20-%2C %20gostaria%20de%20agendar%20uma%20avalia%C3%A7%C3%A3o%20para%20-">
        Entre em<br>contato!
      </a>
    </section>

    <section class="different" id="different">
      <div class="left">
        <div class="top">
          <a class="whatsapp" href="https://api.whatsapp.com/send?phone=556182870986&text=Ol%C3%A1!%20Sou%20-%2C %20gostaria%20de%20agendar%20uma%20avalia%C3%A7%C3%A3o%20para%20-">
            <i class="fab fa-whatsapp"></i>
            <span>Taguatinga <br> Trade Center</span>
          </a>
          <h2>Nossos <br> Diferenciais</h2>
          <a class="whatsapp" href="https://api.whatsapp.com/send?phone=556191875504&text=Ol%C3%A1!%20Sou%20-%2C %20gostaria%20de%20agendar%20uma%20avalia%C3%A7%C3%A3o%20para%20-">
            <i class="fab fa-whatsapp"></i>
            <span>Brasília <br> Shopping</span>
          </a>
        </div>
        <div class="item">
          <div class="icon">
            <img src="/images/location.png" alt="">
          </div>
          <span>Localização privilegiada no coração de Brasília e Taguatinga!</span>
        </div>
        <div class="item">
          <div class="icon">
            <img src="/images/shield.png" alt="">
          </div>
          <span>Transparência, confiança e eficiência. Há 31 anos transformando sorrisos!</span>
        </div>
        <div class="item">
          <div class="icon">
            <img src="/images/heart.png" alt="">
          </div>
          <span>Atendimento humanizado e personalizado!</span>
        </div>
        <div class="item">
          <div class="icon">
            <img src="/images/tech.png" alt="">
          </div>
          <span>Tecnologia de ponta!</span>
        </div>
      </div>
      <div class="phone">
        <h2>Agende sua avaliação com a nossa equipe!</h2>
        <input type="text" id="name2" name="name" placeholder="Nome">
        <input type="text" id="phone2" name="phone" placeholder="Whatsapp">
        <input type="text" id="treatment2" name="treatment" placeholder="Tratamento">
        <button id="2">ENVIAR</button>
      </div>
    </section>

    <section class="team" id="team">
      <h1>Quem Somos</h1>

      <div class="members">
        <div class="member">
          <div class="image">
            <img src="/images/jessica.jpg" alt="">
          </div>
          <span>
            Dra. Jéssica Campos<br>
            CRO-DF 11367<br>
            Odontopediatra
          </span>
        </div>
        <div class="member">
          <div class="image">
            <img src="/images/bruno.jpg" alt="">
          </div>
          <span>
            Dr. Bruno Franzão<br>
            CRO-DF 6718<br>
            Estética Facial e do Sorriso
          </span>
        </div>
        <div class="member">
          <div class="image">
            <img src="/images/Mylene.png" alt="">
          </div>
          <span>
            Dra. Mylene Monteiro<br>
            CRO-DF 13064<br>
            Clínica Geral
          </span>
        </div>
        <div class="member">
          <div class="image">
            <img src="/images/antonio.jpg" alt="">
          </div>
          <span>
            Dr. Antônio Carlos<br>
            CRO-DF 5344<br>
            Implantodontia e Periodontia
          </span>
        </div>
        <div class="member">
          <div class="image">
            <img src="/images/paulo.jpg" alt="">
          </div>
          <span>
            Dr. Paulo Nagata<br>
            CRO-DF 2813<br>
            Ortodontista
          </span>
        </div>
        <div class="member">
          <div class="image">
            <img src="/images/claudia.jpg" alt="">
          </div>
          <span>
            Dra. Cláudia Honda<br>
            CRO-DF 2814<br>
            Ortodontista
          </span>
        </div>
        <div class="member">
          <div class="image">
            <img src="/images/claudio.jpg" alt="">
          </div>
          <span>
            Dr. Claudio Sesso<br>
            CRO-DF 2756<br>
            Ortodontista
          </span>
        </div>
      </div>

      <div class="container">
        <div class="callout">
          Ligue agora!
        </div>

        <div class="signboard">
          <a class="whatsapp" href="https://api.whatsapp.com/send?phone=556182870986&text=Ol%C3%A1!%20Sou%20-%2C %20gostaria%20de%20agendar%20uma%20avalia%C3%A7%C3%A3o%20para%20-">
            <i class="fab fa-whatsapp"></i>
            <span>Taguatinga <br> Trade Center</span>
          </a>
          <div class="sign">
            <span>Horário de Atendimento</span>
            <span class="neon">Segunda - Sexta | 8h - 18h</span>
          </div>
          <a class="whatsapp" href="https://api.whatsapp.com/send?phone=556191875504&text=Ol%C3%A1!%20Sou%20-%2C %20gostaria%20de%20agendar%20uma%20avalia%C3%A7%C3%A3o%20para%20-">
            <i class="fab fa-whatsapp"></i>
            <span>Brasília <br> Shopping</span>
          </a>
        </div>
      </div>
    </section>

    <section class="testimonies" id="testimonies">
      <h1>Depoimentos</h1>

      <div class="gallery js-flickity">
        <a href="" class="gallery-cell">
          <img src="/images/claudia.jpeg" alt="Invisalign"></img>
        </a>
        <a href="" class="gallery-cell">
          <img src="/images/rodrigo.jpeg" alt="odontopediatria"></img>
        </a>
        <a href="" class="gallery-cell">
          <img src="/images/leidiane.jpeg" alt="Aparelhos Transparentes"></img>
        </a>
        <a href="" class="gallery-cell">
          <img src="/images/leticia.jpeg" alt="Restaurações Estéticas"></img>
        </a>
        <a href="" class="gallery-cell">
          <img src="/images/magda.jpeg" alt="Restaurações Estéticas"></img>
        </a>
      </div>

      <div class="footer">
        <a class="more-testimonies" href="https://www.google.com/search?q=aquarela+ortodontia&oq=aquarela+ortodontia&aqs=chro me..69i57j0i22i30j69i60l2.7575j0j7&sourceid=chrome&ie=UTF-8#lrd=0x935a3afbb7796b87: 0xe955ef836ca4442f,1">
          Ver mais<br>depoimentos
        </a>
        <div class="call-to-action">
          <div class="callout">Consulte agora nossas condições especiais!</div>
            <div class="form">
              <input type="text" id="name3" name="name" placeholder="Nome">
              <input type="text" id="phone3" name="phone" placeholder="Whatsapp">
              <input type="text" id="treatment3" name="treatment" placeholder="Tratamento">
              <button id="3">ENVIAR</button>
            </div>
        </div>

        <div class="find-us">
          <div class="side">
            <div class="image">
              <img src="/images/location-red.png" alt="">
            </div>
            <span>Brasília Shopping</span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122858.49615481742!2d-47.959296841796885!3d-15.786649499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3afbd1b8536d%3A0x818bfe00f882bb8c!2sBras%C3%ADlia%20Shopping!5e0!3m2!1sen!2sbr!4v1623960234964!5m2!1sen!2sbr"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

          <div class="middle">
            <h1>Nos Encontre</h1>
            <div class="image">
              <img src="/images/atention.png" alt="">
            </div>
            <span>Não atendemos convênio. <br> Somente particular</span>
          </div>

          <div class="side">
            <div class="image">
              <img src="/images/location-red.png" alt="">
            </div>
            <span>Taguatinga Trade Center</span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.4719128768743!2d-48.05458588555419!3d-15.831775528092178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bd2af935d9b05%3A0x6764779fe92867e4!2sTrade%20Center%20Taguatinga!5e0!3m2!1sen!2sbr!4v1623960263893!5m2!1sen!2sbr"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </section>

  </body>
  <!-- Carousel JS -->
  <script src="/javascript/flickity.pkgd.min.js"></script>
  <script src="/javascript/main.js"></script>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/af6a9f2a9f.js" crossorigin="anonymous"></script>
</html>