@extends('layouts.app')

@section('home')

  {{-- ///////////////////    HEADER    /////////////////////// --}}
  <header class="header-area">
    <div class="navbar-area">
      <div class="container1">
        <nav class="site-navbar">
          <button class="nav-toggler">
            <span></span>
          </button>
          <div class="txt">
            <a class="aTxt" href="#home">
              <h1 class="name">{{ __('home.name') }}</h1>
            </a>
            <div class="cover"><b>|</b></div>
          </div>
          <ul class="nav">
            <li><a class="aNav" href="#about">{{ __('home.about') }}</a></li>
            <li><a class="aNav" href="#skills">{{ __('home.skills') }}</a></li>
            <li><a class="aNav" href="#career">{{ __('home.career') }}</a></li>
            <li><a class="aNav" href="#contact">{{ __('home.contact') }}</a></li>
            <li class="aBgr">
              @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                  <a href="{{ route('lang.switch', $lang) }}" class="aLang">{{ $language }}

                    @if ($lang == 'en')
                      <i class="flag flag-united-kingdom mx-1"></i>
                    @endif
                    @if ($lang == 'fr')
                      <i class="flag flag-fr mx-1"></i>
                    @endif
                    @if ($lang == 'es')
                      <i class="flag flag-es mx-1"></i>
                    @endif
                    @if ($lang == 'it')
                      <i class="flag flag-it mx-1"></i>
                    @endif
                  </a>
                @endif
              @endforeach
            </li>
          </ul>
          <div class="langs">
            <div class="nav m-auto">
              @if (App::getLocale() == 'en')
                <i class="flag flag-united-kingdom"></i>
              @elseif(App::getLocale()=='fr')
                <i class="flag flag-fr"></i>
              @elseif(App::getLocale()=='es')
                <i class="flag flag-es"></i>
              @elseif(App::getLocale()=='it')
                <i class="flag flag-it"></i>
              @endif
            </div>
            <select class="selectLang" onchange="location = this.value;">
              <option>
                @if (App::getLocale() == 'en')
                  {{ __('home.en') }}
                @elseif(App::getLocale()=='fr')
                  {{ __('home.fr') }}
                @elseif(App::getLocale()=='es')
                  {{ __('home.es') }}
                @elseif(App::getLocale()=='it')
                  {{ __('home.it') }}
                @endif
              </option>
              @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                  <option value="{{ route('lang.switch', $lang) }}" class="lang optionLang">
                    {{ $language }}
                @endif
              @endforeach
              </option>
            </select>
          </div>
        </nav>
      </div>
    </div>
  </header>

  {{-- ///////////////////    HOME    /////////////////////// --}}
  <div class="banner-area" id="home">
    <h1 class="h2Status">{{ __('home.status') }}</h1>
  </div>

  {{-- ///////////////////    A PROPOS    /////////////////////// --}}
  <section class="about-area" id="about">
    <span class="h3">
      <h3><u>{{ __('home.about') }}</u></h3>
    </span>
    <div class="postrow mb-8">
      <div class="minip">
        <div class="circle">
          <div class="imageb">
            <div class="image"></div>
          </div>
        </div>
        {{-- <div class="name"><b><h2 class="name">{{__('home.name')}}</h2></b></div> --}}
        {{-- <img src="{{ asset('images/logo LG.png') }}" class="card-img-top" alt="..."> --}}
        <div class="details">
          <span>{{ __('home.age') }}</span>
        </div>
        <div class="details">
          <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
            {{ __('home.hometown') }}</span>
        </div>
      </div>
      <div class="post">
        <div class="temp">
          <p>{{ __('home.description') }}</p>
          <img src="{{ asset('images/logo LG.png') }}" class="card-img-top" alt="...">
        </div>
      </div>
    </div>
  </section>

  {{-- ///////////////////    COMPETENCES    /////////////////////// --}}
  <section class="port-area" id="skills">
    <span class="h3">
      <h3><u>{{ __('home.skills') }}</u></h3>
    </span>
    <ul class="row cardList">
      <h4 class="h4Card">{{ __('home.techno') }}</h4>
      <li class="card">
        <img src="{{ asset('images/php.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">PHP</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/javascript2.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">Javascript</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/typescript.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">Typescript</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/html.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">HTML</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/css.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">CSS</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/sql.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">SQL</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/uml.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">uml</h3>
        </div>
      </li>
    </ul>

    <ul class="row cardList">
      <h4 class="h4Card">{{ __('home.frameworks') }}</h4>
      <li class="card">
        <img src="{{ asset('images/laravel.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">Laravel</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/angular2.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">Angular</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/capacitor.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">capacitor</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/cordova.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">cordova</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/ionic.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">ionic</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/bootstrap.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">bootstrap</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/jquery.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">jquery</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/scrum.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">scrum</h3>
        </div>
      </li>
    </ul>

    <ul class="row cardList mb-8">
      <h4 class="h4Card">{{ __('home.tools') }}</h4>
      <li class="card">
        <img src="{{ asset('images/apache.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">apache</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/mariadb.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">mariadb</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/android studio.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">Android Studio</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/balsamiq.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">balsamiq</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/git.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">git</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/jira.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">jira</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/methode-agile.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">méthode agile</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/linux.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">linux</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/postman.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">postman</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/star uml.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">star uml</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/Sublime-merge.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">Sublime merge</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/vs code.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">vs code</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/sigfox.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">sigfox</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/arduino.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="h3Tech">arduino</h3>
        </div>
      </li>
    </ul>
  </section>

  {{-- ///////////////////    PARCOURS    /////////////////////// --}}
  <section class="service-area" id="career">
    <span class="h3">
      <h3><u>{{ __('home.career') }}</u></h3>
    </span>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="main-timeline mb-8">
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">2021</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/a world to work.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-briefcase" aria-hidden="true"></i>
                    Stage développeur full stack
                  </h3>
                  <h6>
                    <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                      A World To Work, Ecully 69130 (03/21-07/21)
                      <h6>
                        <ul class="description">
                          <li>
                            Développement et améliorations back-end du site <a href="https://moneiot.com" target="_blank">
                              <img src="{{ asset('images/moneiot.png') }}" class="moneiot" alt="...">
                            </a> (PHP/Laravel, Javascript, JQuery) sous Linux
                          </li>
                          <li>
                            Intégration et gestion d'IoTs (Arduino, Sigfox)
                          </li>
                          <li>
                            Refonte de l'interface du site vitrine
                          </li>
                          <li>
                            Création d'une API
                          </li>
                          <li>
                            Création et développement d'une application mobile
                            (Typescript/Angular, Ionic, Capacitor)
                          </li>
                          <li>
                            Intégration d'un multi-langues
                          </li>
                          <li>
                            Déploiement de l'application mobile (Android Studio)
                          </li>
                          <li>
                            Méthode Agile, GitHub, Jira
                          </li>
                        </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">2021<br>-<br>2020</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/M2I.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-book" aria-hidden="true"></i>
                    Concepteur Développeur d'Applications
                    <i class="bi bi-patch-check-fill" style="color: #1DA1F2"></i>
                  </h3>
                  <h6>
                    <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                      M2I Formation, Lyon 69007 (07/20-07/21)
                      <h6>
                        <ul class="description">
                          <li>
                            Algorithmes
                          </li>
                          <li>
                            Langages : HTML / CSS, Java, PHP, JavaScript, UML, SQL
                          </li>
                          <li>
                            Framework PHP : Symfony
                          </li>
                          <li>
                            Framework Java : Spring, Hibernate
                          </li>
                          <li>
                            Framework JavaScript : Angular, Ionic
                          </li>
                          <li>
                            Gestion des Big Data
                          </li>
                          <li>
                            Base de données : SQL, MySQL, MongoDB
                          </li>
                          <li>
                            POO, Architecture MVC
                          </li>
                        </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">2019 <br>- <br>2010</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/xpo.jpg') }}" class="card-img-top xpo" alt="...">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-briefcase" aria-hidden="true"></i>
                    Superviseur Adjoint
                  </h3>
                  <h6>
                    <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                      XPO Logistics, Genas 69740
                      <h6>
                        <ul class="description">
                          <li>
                            Planifier le traitement des commandes:
                            Adapter les demandes spécifiques des clients selon le
                            cahier des charges, Respect des KPI, Respect des directives
                            client, Réaliser un suivi d’activité
                          </li>
                          <li>
                            Management d’équipe:
                            Management de 2 équipes de +10 personnes, Animer et
                            motiver l’équipe, Être à l’écoute, former, accompagner les
                            salariés, Résoudre les problèmes imprévus
                          </li>
                          <li>
                            Planifier l’activité du personnel:
                            Répartir la charge de travail, Gérer les missions en cours et
                            à venir, Établir les bons de commande
                          </li>
                          <li>
                            Coordonner:
                            Adjoint du chef d’équipe, Coordonner les actions du
                            responsable d’exploitation avec le groupe
                          </li>
                          <li>
                            Polyvalence:
                            Connaissance et capacité d'effectuer n'importe quelle tâche de
                            chaque poste
                          </li>
                        </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">2010 <br>- <br>2008</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/peyrefitte.png') }}" class="card-img-top peyrefitte" alt="...">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-book" aria-hidden="true"></i>
                    BTS Ventes et Productions Touristiques
                  </h3>
                  <h6>
                    <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                      Peyrefitte Tourisme, Lyon 69002
                      <h6>
                        <ul class="description">
                          <li>
                            français
                          </li>
                          <li>
                            communication en langue étrangère (Anglais, Espagnol)
                          </li>
                          <li>
                            géographie et histoire des civilisations
                          </li>
                          <li>
                            économie et droit appliqués au tourisme
                          </li>
                          <li>
                            mercatique et productions touristiques
                          </li>
                          <li>
                            commercialisation de produits touristiques
                          </li>
                        </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">2007</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/la salle.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-book" aria-hidden="true"></i>
                    Bac STI Génie Mécanique
                    <i class="bi bi-patch-check-fill" style="color: #1DA1F2"></i>
                  </h3>
                  <h6>
                    <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                      Jean-Baptiste de la Salle, Lyon 69004
                      <h6><br>
                        <ul class="description">
                          <li>
                            Études des constructions
                          </li>
                          <li>
                            Études des systèmes techniques industriels
                          </li>
                          <li>
                            Sciences physiques et physique appliquée
                          </li>
                          <li>
                            Productique mécanique
                          </li>
                          <li>
                            Matières générales
                          </li>
                        </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  {{-- ///////////////////    CONTACT   /////////////////////// --}}
  <section class="contact-area" id="contact">
    <span class="h3">
      <h3><u>{{ __('home.contact') }}</u></h3>
    </span>
    <div class="text-part">
      <h1>
        Contact Area</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque commodi dolor est nobis veniam!
        Eius rerum, unde. Accusamus corporis esse eveniet exercitationem fugiat harum pariatur sequi similique
        tenetur vitae. Aliquam amet est excepturi, exercitationem facere fugit ipsa laborum molestiae nemo officiis
        placeat quos repellat saepe temporibus voluptatum.</p>
    </div>
  </section>




  <script>
    const navToggler = document.querySelector('.nav-toggler');
    const navMenu = document.querySelector('.site-navbar ul');
    const navLinks = document.querySelectorAll('.site-navbar a');

    allEventListners();

    function allEventListners() {
      navToggler.addEventListener('click', togglerClick);
      navLinks.forEach(elem => elem.addEventListener('click', navLinkClick));
    }

    function togglerClick() {
      navToggler.classList.toggle('toggler-open');
      navMenu.classList.toggle('open');
    }


    function navLinkClick() {
      if (navMenu.classList.contains('open')) {
        navToggler.click();
      }
    }
  </script>

@endsection
