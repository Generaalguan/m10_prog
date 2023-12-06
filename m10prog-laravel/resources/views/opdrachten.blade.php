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
    <link href="dist/app.css" rel="stylesheet">
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
          <img class="logo_img" src="../img/logo.webp" alt="Logo van Gemeente Amsterdam">
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
        <h4 @click="togglesearchSmall" class="nav_search nav_search-small"><i class="fa-solid fa-magnifying-glass"></i>
          zoeken</h4>

        <!--menu-->
        <img @click="togglemenu" class="nav_hamburgMenu" src="../img/Hamburg menu.webp" alt="Hamburger menu">
        <div v-show="menu" class="nav_menu" id="menu">
          <ul class="nav_list">
            <li>
              <a class="nav_listTitel" href="{{route('bmv')}}">BMV</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/organisatie/">Organisatie</a>
            </li>
            <li>
              <a class="nav_listItem" href="./projecten.html">Projecten</a>
            </li>
            <li>
              <a class="nav_listItem" href="https://www.amsterdam.nl/pmb/werken/">Werken bij</a>
            </li>
            <hr>
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
        <img @click="togglemenuSmall" class="nav_hamburgMenu nav_hamburgMenu-small" src="../img/Hamburg menu.webp"
          alt="Hamburger menu">

      </div>

    </nav>

    <div class="header_description">
      <h1 class="header_h1">projecten</h1>
    </div>
  </header>

  <main class="main">

    <div class="main_wrapper">

      <section class="projecten">
        <h1 class="description_titel">Bijdragen aan een toekomstbestendige stad</h1>
        <div class="projecten_wrapper">
          
          <article class="projecten_project">
            <img src="../img/centraal_station.webp" alt="een foto van Nieuwbouw Spinoza20first" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Nieuwbouw Spinoza20first</h4>
              <h5 class="projecten_description">Spinoza20First: duurzame school en sporthal</h5>
            </div>
            <a href="./projecten/spinoza.html" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>

          <article class="projecten_project">
            <img src="../img/aan_tafel.webp" alt="een foto van Nieuwbouw AICS" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Nieuwbouw AICS</h4>
              <h5 class="projecten_description">Amsterdam International Community School (AICS)</h5>
            </div>
            <a href="./projecten/aics.html" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>

          <article class="projecten_project">
            <img src="../img/Bostheater.webp" alt="een foto van Bostheater" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Renovatie Bostheater</h4>
              <h5 class="projecten_description">Bostheater: klassieke attractie, vernieuwde jas</h5>
            </div>
            <a href="./projecten/bostheater.html" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>

          <article class="projecten_project">
            <img src="../img/gebouwen.webp" alt="een foto van de Wereldburger" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Renovatie de Wereldburger</h4>
              <h5 class="projecten_description">Wereldburger: prijswinnende renovatie</h5>
            </div>
            <a href="./projecten/wereldburger.html" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>

          <article class="projecten_project">
            <img src="../img/gesprek.webp" alt="een foto van Kwartiermaker Nationaal Slavernijmuseum" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Kwartiermaker Nationaal Slavernijmuseum</h4>
              <h5 class="projecten_description">Nationaal Slavernijmuseum</h5>
            </div>
            <a href="./projecten/kwartiermaker.html" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>

          <article class="projecten_project">
            <img src="../img/gekleurde_gebouwen.webp" alt="een foto van Amsterdam Museum" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Renovatie Amsterdam Museum</h4>
              <h5 class="projecten_description">Amsterdam Museum: renovatie in voorbereiding</h5>
            </div>
            <a href="" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>

          <article class="projecten_project">
            <img src="../img/AFC.webp" alt="een foto van Sportpark Goed Genoeg & Clubgebouw AFC" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Sportpark Goed Genoeg & Clubgebouw AFC</h4>
              <h5 class="projecten_description">AFC: nieuwe velden, nieuw clubhuis</h5>
            </div>
            <a href="./projecten/afc.html" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>

          <article class="projecten_project">
            <img src="../img/onder_constructie.webp" alt="foto van Verbouwing en Nieuwbouw Werven en Overslagpunten" class="projecten_img">
            <div class="projecten_text">
              <h4 class="projecten_titel">Verbouwing en Nieuwbouw Werven en Overslagpunten</h4>
              <h5 class="projecten_description">Programma Transitie Werven en Overslagpunten</h5>
            </div>

            <a href="./projecten/werven.html" class="projecten_link">
              <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
            </a>
          </article>
        </div>
      </section>
    </div>



  </main>

  <footer class="footer">
    <div class="footer_wrapper">
      <a href="https://www.amsterdam.nl/pmb/" class="logo_link">
        <div class="logo">
          <img class="logo_img" src="../img/logo.webp" alt="Logo van Gemeente Amsterdam">
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