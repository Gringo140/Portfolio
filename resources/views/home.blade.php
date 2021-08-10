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
  <span class="mb-5 mt-5"><h3>{{__('home.about')}}</h3></span>
<div class="postrow">
  <div class="minip">
  <div class="circle">
    <div class="imageb">
      <div class="image"></div>
    </div>
  </div>
  <div class="name"><b><h2 class="name">{{__('home.name')}}</h2></b></div>
  
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
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>

</div>
</section>

{{-- /////////////////////////////////////////// --}}


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