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
              <a class="nav_listItem" href="{{'projecten'}}">Projecten</a>
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
      <h1 class="header_h1">{{$title}}</h1>
    </div>
  </header>