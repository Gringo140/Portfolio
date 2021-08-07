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
    <h2 class="h2Status">{{__('home.status')}}</h2> 
</div> 

<section class="about-area" id="about">
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

<div>
    <div class="row">
        <img class="ik" src="{{ asset('images/profil.jpg') }}">
        <h2>{{__('home.name')}}</h2>
    </div>
    
</div>

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