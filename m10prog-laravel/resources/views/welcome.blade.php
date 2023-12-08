<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!--icons-->
    <script src="https://kit.fontawesome.com/a8c080a66a.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="/dist/app.css" rel="stylesheet">
    <!--JS-->
    <script src="https://unpkg.com/vue@next" defer></script>
    <script src="/js/main.js" defer></script>
    <script src="/js/app.js" defer></script>
</head>

<body>
  <header class="header">
    <nav class="nav" id="navbar">

        <a href="{{route('bmv')}}" class="logo_link">
          <div class="logo">
            <img class="logo_img" src="img/logo.webp" alt="Logo van Gemeente Amsterdam">
            <div class="logo_wrapper">
              <h4 class="logo_text">Gemeente</h4>
              <h4 class="logo_text">Amsterdam</h4>
            </div>

          </div>
        </a>

      <div class="nav_right" id="nav_right">
        <!--search-->
        <form v-show="search" class="nav_form" id="nav_form">
          <input type="text" class="nav_input">
          <button class="nav_submit">Verstuur</button>
        </form>
        <h4 @click="togglesearch" class="nav_search"><i class="fa-solid fa-magnifying-glass"></i> zoeken</h4>
        <!--searchSmall-->
        <h4 @click="togglesearchSmall" class="nav_search nav_search-small"><i class="fa-solid fa-magnifying-glass"></i> zoeken</h4>

        <!--menu-->
        <img @click="togglemenu" class="nav_hamburgMenu" src="img/Hamburg menu.webp" alt="Hamburger menu">
        <div v-show="menu" class="nav_menu" id="menu">
          <ul class="nav_list">
            <!--BMV-->
            <li>
              <a class="nav_listTitel" href="{{route('bmv')}}">BMV</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/organisatie/">Organisatie</a>
            </li>
            <li>
              <a class="nav_listItem" href="{{route('projecten')}}">Projecten</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/werken/">Werken bij</a>
            </li>
            <hr>
            <!--PMB-->
            <li>
              <a class="nav_listTitel" href="https://www.amsterdam.nl/pmb/">PMB</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/mensen/">Mensen</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/expertise/">Expertise</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/opdrachten-projecten/">Opdrachten en
                Opdrachten</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/publicaties/">Publicaties</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/contact/">contact</a>
            </li>
          </ul>
        </div>
        <!--menuSmall-->
        <img @click="togglemenuSmall" class="nav_hamburgMenu nav_hamburgMenu-small" src="img/Hamburg menu.webp" alt="Hamburger menu">

      </div>

    </nav>

    <div class="header_description">
      <h1 class="header_h1">Bouwmanagement en Maatschappelijk Vastgoed</h1>
    </div>
  </header>

  <main class="main">

    <div class="main_wrapper">

      <section class="description description_section">

        <h1 class="description_titel">Bijdragen aan een toekomstbestendige stad</h1>

        <article class="description_text">
          <h2 class="description_header">Een sociaal-duurzaam Amsterdam</h2>
          <div class="description_text_wrapper">
            <p class="description_p">Voor veel mensen is en blijft Amsterdam een zeer aantrekkelijke plek om te wonen en dus
              blijven we bouwen aan de groei van de stad.</p>
            <p class="description_p">Maar Amsterdam bestaat natuurlijk uit méér dan alleen woningen. Daarom bouwen we aan een
              sociaal-duurzaam Amsterdam: een stad die het welzijn van haar bewoners belangrijk vindt en verbetert, door
              niet alleen woningen te bouwen maar ook te zorgen voor maatschappelijke voorzieningen, voor huidige
              bewoners
              en toekomstige generaties.</p>
          </div>

        </article>
      </section>

      <section class="slider">

        <div class="slider_slide">
          <a href="https://www.amsterdam.nl/pmb/expertise/bmv/projecten/renovatie-amsterdam-museum/">
            <h4 class="slider_number">1 / 3</h4>
            <img class="slider_img" src="" alt="">

            <h4 class="slider_text">Centraal station</h4>
          </a>

        </div>

        <div class="slider_slide">
          <a href="https://www.amsterdam.nl/pmb/expertise/bmv/projecten/kwartiermaker-nationaal-slavernijmuseum/">
            <h4 class="slider_number">2 / 3</h4>
            <img class="slider_img" src="" alt="">
            <h4 class="slider_text">Gebouwen</h4>
          </a>

        </div>

        <div class="slider_slide">
          <a href="https://www.amsterdam.nl/pmb/expertise/bmv/projecten/kwartiermaker-nationaal-slavernijmuseum/">
            <h4 class="slider_number">3 / 3</h4>
            <img class="slider_img" src="" alt="">
            <h4 class="slider_text">Gekleurde Gebouwen</h4>
          </a>

        </div>  
      </section>
    </div>
  


  </main>

  <footer class="footer">
    <div class="footer_wrapper">
      <a href="https://www.amsterdam.nl/pmb/" class="logo_link">
        <div class="logo">
          <img class="logo_img" src="img/logo.webp" alt="Logo van Gemeente Amsterdam">
          <div class="logo_wrapper">
            <h4 class="logo_text">Gemeente</h4>
            <h4 class="logo_text">Amsterdam</h4>
          </div>

        </div>
      </a>




      <div class="footer_bottom">

        <article class="footer_section">
          <h3 class="footer_titel">Mail</h3>
          <p class="footer_text">PMB is bereikbaar op werkdagen tussen 8.30 - 17.30 uur.</p>
          <a class="footer_link" href="https://www.amsterdam.nl/pmb/contact/">Contact</a>
        </article>

        <article class="footer_section">
          <h3 class="footer_titel">Over deze site</h3>
          <div class="footer_link_wrapper">
            <a class="footer_link" href="https://www.amsterdam.nl/pmb/algemene-onderdelen/colofon/">Colofon</a>
            <a class="footer_link"
              href="https://www.amsterdam.nl/pmb/algemene-onderdelen/proclaimer-copyright/">Proclaimer en Copyright</a>
            <a class="footer_link" href="https://www.amsterdam.nl/pmb/algemene-onderdelen/sitemap/">Sitemap</a>
          </div>

        </article>

        <article class="footer_section">
          <h3 class="footer_titel">Amsterdam.nl</h3>
          <p class="footer_text">Nieuws en publieksinformatie van de gemeente Amsterdam vindt u op amsterdam.nl</p>
          <a class="footer_link" href="https://www.amsterdam.nl/">Naar amsterdam.nl</a>
        </article>

        <article class="footer_section">
          <h3 class="footer_titel">Volg het ProjectManagement Bureau</h3>
          <div class="footer_logos">
            <a class="footer_logo" href="https://twitter.com/PMB020">
              <i class="fa-brands fa-twitter "></i>
            </a>

            <a class="footer_logo" href="http://www.linkedin.com/company/projectmanagement-bureau">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </article>


      </div>
    </div>
  </footer>

</body>

</html>