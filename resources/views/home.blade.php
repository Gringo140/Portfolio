@extends('layouts.app')

@section('home')

<header class="header-area">
  <div class="navbar-area">
    <div class="container1">
      <nav class="site-navbar">
        <button class="nav-toggler">
          <span></span>
        </button>
        <div class="txt">
          <a class="aTxt" href="#home"><h1 class="name">{{__('home.name')}}</h1></a>
          <div class="cover"><b>|</b></div>
        </div>
        <ul class="nav">
          <li><a class="aNav" href="#about">{{__('home.about')}}</a></li>
          <li><a class="aNav" href="#skills">{{__('home.skills')}}</a></li>
          <li><a class="aNav" href="#career">{{__('home.career')}}</a></li>
          <li><a class="aNav" href="#contact">{{__('home.contact')}}</a></li>
          <li class="aBgr">
            @foreach (Config::get('languages') as $lang => $language)
              @if ($lang != App::getLocale())
              <a href="{{ route('lang.switch', $lang) }}" class="aLang">{{$language}}

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
            @if(App::getLocale()=='en')
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
              @if(App::getLocale()=='en')
              {{__('home.en')}}
              @elseif(App::getLocale()=='fr')
              {{__('home.fr')}}
              @elseif(App::getLocale()=='es')
              {{__('home.es')}}
              @elseif(App::getLocale()=='it')
              {{__('home.it')}}
              @endif
            </option>
            @foreach (Config::get('languages') as $lang => $language)
              @if ($lang != App::getLocale())
                <option value="{{ route('lang.switch', $lang) }}" class="lang optionLang">{{$language}}
              @endif
            @endforeach
            </option>
          </select>
        </div>
      </nav>
    </div>
  </div>
</header>

<div class="banner-area" id="home">  
    <h1 class="h2Status">{{__('home.status')}}</h1> 
</div> 

<section class="about-area"  id="about">
  <span class="h3"><h3><u>{{__('home.about')}}</u></h3></span>
<div class="postrow">
  <div class="minip">
  <div class="circle">
    <div class="imageb">
      <div class="image"></div>
    </div>
  </div>
  {{-- <div class="name"><b><h2 class="name">{{__('home.name')}}</h2></b></div> --}}
  {{-- <img src="{{ asset('images/logo LG.png') }}" class="card-img-top" alt="..."> --}}
  <div class="details">
    <span>{{__('home.age')}}</span>
  </div>
  <div class="details">
    <span> <i class="bi bi-geo-alt-fill" style="color: #E94335"></i>
      {{__('home.hometown')}}</span>
  </div>
</div>

  <div class="post">
    <div class="temp">
      <p>{{__('home.description')}}</p>
      <img src="{{ asset('images/logo LG.png') }}" class="card-img-top" alt="...">
    </div>
  </div>

</div>
</section>

{{-- /////////////////////////////////////////// --}}
<section class="port-area" id="skills">
  <span class="h3"><h3><u>{{__('home.skills')}}</u></h3></span>
<ul class="row cardList">
  <h4 class="h4Card">{{__('home.techno')}}</h4>
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
  <h4 class="h4Card">{{__('home.frameworks')}}</h4>
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


<ul class="row cardList">
  <h4 class="h4Card">{{__('home.tools')}}</h4>
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
{{-- /////////////////////////////////////////// --}}
<section class="about-area">
  <div class="text-part">
    <h1>
      About Area</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque commodi dolor est nobis veniam! Eius rerum, unde. Accusamus corporis esse eveniet exercitationem fugiat harum pariatur sequi similique tenetur vitae. Aliquam amet est excepturi, exercitationem facere fugit ipsa laborum molestiae nemo officiis placeat quos repellat saepe temporibus voluptatum.</p>
  </div>
</section>

<section class="port-area" id="skills">
  <div class="text-part">
    <h1>
      Skills Area</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque commodi dolor est nobis veniam! Eius rerum, unde. Accusamus corporis esse eveniet exercitationem fugiat harum pariatur sequi similique tenetur vitae. Aliquam amet est excepturi, exercitationem facere fugit ipsa laborum molestiae nemo officiis placeat quos repellat saepe temporibus voluptatum.</p>
  </div>
</section>

<section class="service-area" id="career">
  <div class="text-part">
    <h1>
      Career Area</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque commodi dolor est nobis veniam! Eius rerum, unde. Accusamus corporis esse eveniet exercitationem fugiat harum pariatur sequi similique tenetur vitae. Aliquam amet est excepturi, exercitationem facere fugit ipsa laborum molestiae nemo officiis placeat quos repellat saepe temporibus voluptatum.</p>
  </div>
</section>

<section class="contact-area" id="contact">
  <div class="text-part">
    <h1>
      Contact Area</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque commodi dolor est nobis veniam! Eius rerum, unde. Accusamus corporis esse eveniet exercitationem fugiat harum pariatur sequi similique tenetur vitae. Aliquam amet est excepturi, exercitationem facere fugit ipsa laborum molestiae nemo officiis placeat quos repellat saepe temporibus voluptatum.</p>
  </div>
</section>



<script>
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

allEventListners();

function allEventListners() {
  navToggler.addEventListener('click', togglerClick);
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}


function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}
</script>

@endsection