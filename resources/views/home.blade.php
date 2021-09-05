@extends('layouts.app')

@section('home')

  {{-- ///////////////////    HEADER    /////////////////////// --}}
  <header>
    <div class="navbar-area">
      <nav class="site-navbar">
        <button class="nav-toggler">
          <span></span>
        </button>
        <div class="txt">
          <a class="aTxt" href="/">
            <h1 class="name">{{ __('home.name') }}</h1>
          </a>
          <div class="cover"><b>|</b></div>
        </div>
        <ul class="nav">
          <li><a class="aNav" href="#about">{{ __('home.about') }}</a></li>
          <li><a class="aNav" href="#skills">{{ __('home.skills') }}</a></li>
          <li><a class="aNav" href="#achievements">{{ __('home.achievements') }}</a></li>
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
  </header>

  {{-- ///////////////////    HOME    /////////////////////// --}}
  <div class="banner-area" id="home">
    <div class="m-auto text-center">
      <h1 class="h1Status">{{ __('home.status') }}</h1>
      <h3 class="h3Status">
        {{ __('home.status2') }}<br>
        {{ __('home.poste1') }}<br>
        {{ __('home.poste2') }}<br>
        {{ __('home.poste3') }}
      </h3>
    </div>
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
        <div class="details">
          <span>{{ __('home.age') }}</span>
        </div>
        <div class="details">
          <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
            {{ __('home.town') }}</span>
        </div>
        <div class="details">
          <span>{{ __('home.dispo') }}
            <div class="now details2">
              {{ __('home.now') }} 
              <i class="bi bi-check-circle-fill" style="color: green"></i>
            </div>
          </span>
        </div>
      </div>
      <div class="post">
        <div class="temp">
          <p>{{ __('home.description') }}<br><br>
            {{ __('home.description2') }}<br><br>
            {{ __('home.description3') }}
          </p>
          <div class="reseaux">
            <a href="https://www.linkedin.com/in/landry-galien/" target="_blank"
              title="{{ __('home.show_linkedin') }}"><i class="bi bi-linkedin linkedin"></i></a>
            <a href="https://github.com/Gringo140" target="_blank" title="{{ __('home.show_github') }}"><i
                class="bi bi-github github"></i></a>
            <a href="mailto:landry.galien@gmail.com" target="_blank" title="{{ __('home.contact_me1') }}"><i
                class="bi bi-envelope-fill mail"></i></a>
          </div>
          <img src="{{ asset('images/logo LG.png') }}" class="card-img-top" alt="logo Landry Galien">
        </div>
      </div>
    </div>

    <div class="d-flex w-75 justify-content-between pdf">
      <div class="row d-inline-block pdf2">
        <iframe class="pdf3" src="{{ asset('images/CV 2021.pdf#toolbar=0') }}" type="application/pdf" frameBorder="0"
          height="100%" width="auto">
        </iframe>
        <div class="text-center d-flex justify-content-around pdfA">
          <a href="{{ asset('images/CV 2021.pdf') }}" target="_blank">
            {{ __('home.CV') }}
            <i class="bi bi-arrows-angle-expand"></i>
          </a>
          <a download="CV Landry Galien" target="_blank" href="{{ asset('images/CV 2021.pdf') }}">
            {{ __('home.CVdl') }}
            <i class="bi bi-download"></i>
          </a>
        </div>
      </div>
      <div class="row d-inline-block pdf2">
        <iframe class="pdf3" src="{{ asset('images/Lettre recommandation Landry GALIEN.pdf#toolbar=0') }}"
          type="application/pdf" frameBorder="0" height="100%" width="auto">
        </iframe>
        <div class="text-center d-flex justify-content-around pdfA">
          <a href="{{ asset('images/Lettre recommandation Landry GALIEN.pdf') }}" target="_blank">
            {{ __('home.recommandation') }}
            <i class="bi bi-arrows-angle-expand"></i>
          </a>
        </div>
      </div>
    </div>

  </section>

  {{-- ///////////////////    COMPETENCES    /////////////////////// --}}
  <section class="skills-area" id="skills">
    <span class="h3">
      <h3><u>{{ __('home.skills') }}</u></h3>
    </span>

    <ul class="row cardList">
      <h4 class="h4Card">{{ __('home.techno') }}</h4>
      <li class="card">
        <img src="{{ asset('images/php.png') }}" class="card-img-top" alt="logo php">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.php') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/javascript2.png') }}" class="card-img-top" alt="logo javascript">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.javascript') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/typescript.png') }}" class="card-img-top" alt="logo typescript">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.typescript') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/html.png') }}" class="card-img-top" alt="logo HTML">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.html') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/css.png') }}" class="card-img-top" alt="logo CSS">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.css') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/sql.png') }}" class="card-img-top" alt="logo SQL">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.sql') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/uml.png') }}" class="card-img-top" alt="logo UML">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.uml') }}</h3>
        </div>
      </li>
    </ul>

    <ul class="row cardList">
      <h4 class="h4Card">{{ __('home.frameworks') }}</h4>
      <li class="card">
        <img src="{{ asset('images/laravel.png') }}" class="card-img-top" alt="logo laravel">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.laravel') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/symfony.png') }}" class="card-img-top" alt="logo symfony">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.symfony') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/angular2.png') }}" class="card-img-top" alt="logo angular">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.angular') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/capacitor.png') }}" class="card-img-top" alt="logo capacitor">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.capacitor') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/cordova.png') }}" class="card-img-top" alt="logo cordova">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.cordova') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/ionic.png') }}" class="card-img-top" alt="logo ionic">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.ionic') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/bootstrap.png') }}" class="card-img-top" alt="logo bootstrap">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.bootstrap') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/jquery.png') }}" class="card-img-top" alt="logo jquery">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.jquery') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/scrum.png') }}" class="card-img-top" alt="logo scrum">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.scrum') }}</h3>
        </div>
      </li>
    </ul>

    <ul class="row cardList mb-8">
      <h4 class="h4Card">{{ __('home.tools') }}</h4>
      <li class="card">
        <img src="{{ asset('images/apache.png') }}" class="card-img-top" alt="logo apache">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.apache') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/mariadb.png') }}" class="card-img-top" alt="logo mariadb">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.mariadb') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/android studio.png') }}" class="card-img-top" alt="logo android studio">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.android_studio') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/balsamiq.png') }}" class="card-img-top" alt="logo balsamiq">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.balsamiq') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/git.png') }}" class="card-img-top" alt="logo git">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.git') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/jira.png') }}" class="card-img-top" alt="logo jira">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.jira') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/methode-agile.png') }}" class="card-img-top" alt="logo méthode agile">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.agile') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/linux.png') }}" class="card-img-top" alt="logo linux">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.linux') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/postman.png') }}" class="card-img-top" alt="logo postman">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.postman') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/star uml.png') }}" class="card-img-top" alt="logo star uml">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.staruml') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/Sublime-merge.png') }}" class="card-img-top" alt="logo sublime merge">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.sublime_merge') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/vs code.png') }}" class="card-img-top" alt="logo visual studio code">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.vs_code') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/sigfox.png') }}" class="card-img-top" alt="logo sigfox">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.sigfox') }}</h3>
        </div>
      </li>
      <li class="card">
        <img src="{{ asset('images/arduino.png') }}" class="card-img-top" alt="logo arduino">
        <div class="card-body">
          <h3 class="h3Tech">{{ __('home.arduino') }}</h3>
        </div>
      </li>
    </ul>

  </section>

  {{-- ///////////////////    REALISATIONS   /////////////////////// --}}
  <section class="achievements-area" id="achievements">
    <span class="h3">
      <h3><u>{{ __('home.achievements') }}</u></h3>
    </span>

    <ul class="realDesc p-3">
      <li>
        <b>{{ __('home.portfolio') }} :</b>
        {{ __('home.php') }},
        {{ __('home.laravel') }},
        {{ __('home.javascript') }}
      </li>
      <li>
        <b>{{ __('home.todolist') }} :</b>
        {{ __('home.typescript') }},
        {{ __('home.angular') }},
        {{ __('home.ionic') }},
        {{ __('home.cordova') }}
      </li>
      <li>
        <b>{{ __('home.moneiot') }} {{ __('home.participation') }} :</b>
        {{ __('home.php') }},
        {{ __('home.laravel') }},
        {{ __('home.javascript') }},
        {{ __('home.jquery') }},
        {{ __('home.laravel') }},
        {{ __('home.javascript') }}<br>

        <b>{{ __('home.moneiot_app') }} {{ __('home.participation') }} :</b>
        {{ __('home.typescript') }},
        {{ __('home.angular') }},
        {{ __('home.ionic') }},
        {{ __('home.capacitor') }},
        {{ __('home.api') }}
      </li>
      <li>
        <b>{{ __('home.gaming_app') }} :</b>
        {{ __('home.php') }},
        {{ __('home.symfony') }},
        {{ __('home.sql') }},
        {{ __('home.api') }}
      </li>
      <li>
        <b>{{ __('home.magic_deck') }} :</b>
        {{ __('home.php') }},
        {{ __('home.api') }}
      </li>
      <li>
        <b>{{ __('home.quantum') }} :</b>
        {{ __('home.html') }},
        {{ __('home.css') }},
        {{ __('home.php') }}
      </li>
    </ul>

    <div class="real mb-8">
      <div class="flip">
        <div class="front portfolio"></div>
        <div class="back">
          <h2 class="h2Projects">
            {{ __('home.portfolio') }}
          </h2>
          <div class="reseaux linksReal">
            <a href="https://landry-galien.com" title="{{ __('home.show_website') }}" target="_blank">
              <i class="bi bi-globe"></i>
            </a>
            <a href="https://github.com/Gringo140/Portfolio" title="{{ __('home.show_source_code') }}"
              target="_blank">
              <i class="bi bi-code-slash"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="flip todoMobile">
        <div class="front todolist"></div>
        <div class="back">
          <h2 class="h2Todo h2Projects">
            {{ __('home.todolist') }}
          </h2>
          <div class="reseaux linksReal linksRealMobile">
            <a href="https://gringo140.github.io/todolist/www/" title="{{ __('home.show_website') }}"
              target="_blank">
              <i class="bi bi-globe"></i>
            </a>
            <a href="https://github.com/Gringo140/todolist" title="{{ __('home.show_source_code') }}"
              target="_blank">
              <i class="bi bi-code-slash"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="flip">
        <div class="front moneiot2"></div>
        <div class="back">
          <h2 class="h2Projects">
            {{ __('home.moneiot') }}
          </h2>
          <div class="reseaux linksReal">
            <a href="https://www.moneiot.com" title="{{ __('home.show_website') }}" target="_blank">
              <i class="bi bi-globe"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="flip">
        <div class="front gamingApp"></div>
        <div class="back">
          <h2 class="h2Projects">
            {{ __('home.gaming_app') }}
          </h2>
          <div class="reseaux linksReal">
            <a href="https://github.com/Gringo140/gaming-app" title="{{ __('home.show_source_code') }}"
              target="_blank">
              <i class="bi bi-code-slash"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="flip">
        <div class="front magicDeck"></div>
        <div class="back">
          <h2 class="h2Projects">
            {{ __('home.magic_deck') }}
          </h2>
          <div class="reseaux linksReal">
            <a href="https://magicdeck140.herokuapp.com/cards" title="{{ __('home.show_website') }}"
              target="_blank">
              <i class="bi bi-globe"></i>
            </a>
            <a href="https://github.com/Gringo140/magic-deck" title="{{ __('home.show_source_code') }}"
              target="_blank">
              <i class="bi bi-code-slash"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="flip">
        <div class="front quantum"></div>
        <div class="back">
          <h2 class="h2Projects">
            {{ __('home.quantum') }}
          </h2>
          <div class="reseaux linksReal">
            <a href="https://gringo140.github.io/quantum-expertise/" title="{{ __('home.show_website') }}"
              target="_blank">
              <i class="bi bi-globe"></i>
            </a>
            <a href="https://github.com/Gringo140/quantum-expertise" title="{{ __('home.show_source_code') }}"
              target="_blank">
              <i class="bi bi-code-slash"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>

  {{-- ///////////////////    PARCOURS    /////////////////////// --}}
  <section class="career-area" id="career">
    <span class="h3">
      <h3><u>{{ __('home.career') }}</u></h3>
    </span>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="main-timeline mb-8">
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">{{ __('home.2021') }}</span>
                <div class="timeline-icon">
                  <a href="https://www.linkedin.com/company/carpe-diem-informatique/" target="_blank">
                    <img src="{{ asset('images/a world to work.png') }}" class="card-img-top" alt="logo a world to work">
                  </a>
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-briefcase" aria-hidden="true"></i>
                    {{ __('home.stage') }}
                  </h3>
                  <h6 class="mb-2">
                    <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                    {{ __('home.a_world_to_work') }}
                  </h6>
                  <ul class="description">
                    <li>
                      {{ __('home.awtw_task1') }} 
                      <a href="https://moneiot.com" target="_blank">
                        <img src="{{ asset('images/moneiot.png') }}" class="moneiot" alt="logo moneiot">
                      </a> 
                      {{ __('home.awtw_task2') }}
                    </li>
                    <li>{{ __('home.awtw_task3') }}</li>
                    <li>{{ __('home.awtw_task4') }}</li>
                    <li>{{ __('home.awtw_task5') }}</li>
                    <li>{{ __('home.awtw_task6') }}</li>
                    <li>{{ __('home.awtw_task7') }}</li>
                    <li>{{ __('home.awtw_task8') }}</li>
                    <li>{{ __('home.awtw_task9') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">{{ __('home.2021') }}<br>-<br>{{ __('home.2020') }}</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/M2I.png') }}" class="card-img-top" alt="logo m2i formation">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-book" aria-hidden="true"></i>
                    <a href="{{ asset('images/diplôme CDA.jpg') }}" target="_blank">{{ __('home.CDA') }}</a>
                    <i class="bi bi-patch-check-fill" style="color: #1DA1F2"></i>
                  </h3>
                  <h6 class="mb-2">
                    <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                    {{ __('home.m2i') }}
                  </h6>
                  <ul class="description">
                    <li>
                      <b>{{ __('home.techno') }} :</b>
                      {{ __('home.html') }},
                      {{ __('home.css') }},
                      {{ __('home.java') }},
                      {{ __('home.php') }},
                      {{ __('home.javascript') }},
                      {{ __('home.uml') }},
                      {{ __('home.sql') }}
                    </li>
                    <li>
                      <b>{{ __('home.framework') }} {{ __('home.php') }} :</b> 
                      {{ __('home.symfony') }}
                    </li>
                    <li>
                      <b>{{ __('home.framework') }} {{ __('home.java') }} :</b> 
                      {{ __('home.spring') }}, {{ __('home.hibernate') }}
                    </li>
                    <li>
                      <b>{{ __('home.framework') }} {{ __('home.javascript') }} :</b>
                      {{ __('home.angular') }}, {{ __('home.ionic') }}
                    </li>
                    <li>{{ __('home.algorithmie') }}</li>
                    <li>{{ __('home.big_data') }}</li>
                    <li>{{ __('home.bdd') }}</li>
                    <li>{{ __('home.pattern') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">2019 <br>- <br>2010</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/xpo.jpg') }}" class="card-img-top xpo" alt="logo xpo">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-briefcase" aria-hidden="true"></i>
                    {{ __('home.superviseur') }}
                  </h3>
                  <h6 class="mb-2">
                    <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                    {{ __('home.xpo') }}
                  </h6>
                  <ul class="description">
                    <li>
                      <b>{{ __('home.xpo_task1') }}</b>
                      {{ __('home.xpo_task1_1') }}
                    </li>
                    <li>
                      <b>{{ __('home.xpo_task2') }}</b>
                      {{ __('home.xpo_task2_1') }}
                    </li>
                    <li>
                      <b>{{ __('home.xpo_task3') }}</b>
                      {{ __('home.xpo_task3_1') }}
                    </li>
                    <li>
                      <b>{{ __('home.xpo_task4') }}</b>
                      {{ __('home.xpo_task4_1') }}
                    </li>
                    <li>
                      <b>{{ __('home.xpo_task5') }}</b>
                      {{ __('home.xpo_task5_1') }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">{{ __('home.2010') }} <br>- <br>{{ __('home.2008') }}</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/peyrefitte.png') }}" class="card-img-top peyrefitte" alt="logo peyrefitte">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-book" aria-hidden="true"></i>
                    {{ __('home.bts') }}
                  </h3>
                  <h6 class="mb-2">
                    <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                    {{ __('home.peyrefitte') }}
                  </h6>
                  <ul class="description">
                    <li>{{ __('home.bts_cours1') }}</li>
                    <li>{{ __('home.bts_cours2') }}</li>
                    <li>{{ __('home.bts_cours3') }}</li>
                    <li>{{ __('home.bts_cours4') }}</li>
                    <li>{{ __('home.bts_cours5') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <span class="timeline-year">{{ __('home.2007') }}</span>
                <div class="timeline-icon">
                  <img src="{{ asset('images/la salle.png') }}" class="card-img-top" alt="logo JB la salle">
                </div>
                <div class="content">
                  <h3 class="title">
                    <i class="bi bi-book" aria-hidden="true"></i>
                    {{ __('home.bac') }}
                    <i class="bi bi-patch-check-fill" style="color: #1DA1F2"></i>
                  </h3>
                  <h6 class="mb-2">
                    <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
                    {{ __('home.la_salle') }}
                  </h6>
                  <ul class="description">
                    <li>{{ __('home.bac_cours1') }}</li>
                    <li>{{ __('home.bac_cours2') }}</li>
                    <li> {{ __('home.bac_cours3') }}</li>
                    <li>{{ __('home.bac_cours4') }}</li>
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

    <div class="businessCard">
      <div>
        <a href="{{ asset('images/carte de visite LG large.pdf') }}" target="_blank"
          title="{{ __('home.show_business_card') }}">
          <img src="{{ asset('images/carte de visite.png') }}" class="mb-4 businessCard businessCard2" alt="carte de visite Landry Galien">
        </a>
      </div>
      <div class="text-center m-auto d-flex justify-content-around pdf2 pdfA businessCard3">
        <a href="mailto:landry.galien@gmail.com" target="_blank" class="mb-4"> {{ __('home.contact_me') }} 
          <i class="bi bi-envelope-fill mail"></i>
        </a>
        <a download="Landry Galien - Développeur full stack junior" target="_blank"
          href="{{ asset('images/carte de visite LG 2.pdf') }}" class="mb-4">
          {{ __('home.business_card') }}
          <i class="bi bi-download"></i>
        </a>
      </div>
    </div>

  </section>

  {{-- ///////////////////    FOOTER   /////////////////////// --}}

  <footer>
    <div class="content1">
      {{ __('home.made') }} <div class="heart"><i class="bi bi-suit-heart-fill"></i></div>
      {{ __('home.copyright') }}
    </div>
  </footer>

  {{-- ///////////////////    SCRIPTS   /////////////////////// --}}

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
