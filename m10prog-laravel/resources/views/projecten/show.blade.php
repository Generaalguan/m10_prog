@extends( 'layouts.master' )
@section('content')
  {{$project->titel}}
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


@endsection