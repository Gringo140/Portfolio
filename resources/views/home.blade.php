@extends('layouts.app')

@section('home')
<!-- <header>
<nav class="navbar1">

<div class="header">
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu" id="menu" >
    <li><a class="aBgr" href="#about">{{__('home.about')}}</a></li>
    <li><a class="aBgr" href="#portfolio">{{__('home.skills')}}</a></li>
    <li><a class="aBgr" href="#services">{{__('home.career')}}</a></li>
    <li><a class="aBgr" href="#contact">{{__('home.contact')}}</a></li>
    <li>
    @foreach (Config::get('languages') as $lang => $language)
      @if ($lang != App::getLocale())
        <a href="{{ route('lang.switch', $lang) }}" class="aBgr">{{$language}}

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
</div>
  
  <div class="txt">
    <a href="#home"><h1 class="name">{{__('home.name')}}</h1></a>
      <div class="cover"><b>|</b></div>
  </div>
    <ul class="nav">
        <li><a class="aNav" href="#about">{{__('home.about')}}</a></li>
        <li><a class="aNav" href="#portfolio">{{__('home.skills')}}</a></li>
        <li><a class="aNav" href="#services">{{__('home.career')}}</a></li>
        <li><a class="aNav" href="#contact">{{__('home.contact')}}</a></li>
    </ul>
    <div class="langs">
    <ul class="nav m-auto">
      @if(App::getLocale()=='en')
        <li><i class="flag flag-united-kingdom"></i>
      @elseif(App::getLocale()=='fr')
        <i class="flag flag-fr"></i>
      @elseif(App::getLocale()=='es')
        <i class="flag flag-es"></i>
      @elseif(App::getLocale()=='it')
        <i class="flag flag-it"></i></li>
      @endif
    </ul>
    <select class="selectLang" onchange="location = this.value;">
      <option>
        @if(App::getLocale()=='en')
          EN
        @elseif(App::getLocale()=='fr')
          FR
        @elseif(App::getLocale()=='es')
          ES
        @elseif(App::getLocale()=='it')
          IT
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
</header> -->

<header class="header-area">
  <!-- site-navbar start -->
  <div class="navbar-area">
    <div class="container1">
      <nav class="site-navbar">
      <button class="nav-toggler">
          <span></span>
        </button>


        <!-- site menu/nav -->
        <div class="txt">
    <a class="aTxt" href="#home"><h1 class="name">{{__('home.name')}}</h1></a>
      <div class="cover"><b>|</b></div>
  </div>
    <ul class="nav">
        <li><a class="aNav" href="#about">{{__('home.about')}}</a></li>
        <li><a class="aNav" href="#portfolio">{{__('home.skills')}}</a></li>
        <li><a class="aNav" href="#services">{{__('home.career')}}</a></li>
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
          EN
        @elseif(App::getLocale()=='fr')
          FR
        @elseif(App::getLocale()=='es')
          ES
        @elseif(App::getLocale()=='it')
          IT
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

        <!-- nav-toggler for mobile version only -->

      </nav>
    </div>
  </div><!-- navbar-area end -->



<!--   <div class="intro-area">
    <div class="container">
    <h2 class="h2Status">{{__('home.status')}}</h2> 
    </div>
  </div> -->

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

<section class="port-area" id="portfolio">
  <div class="text-part">
    <h1>
      Portfolio Area</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque commodi dolor est nobis veniam! Eius rerum, unde. Accusamus corporis esse eveniet exercitationem fugiat harum pariatur sequi similique tenetur vitae. Aliquam amet est excepturi, exercitationem facere fugit ipsa laborum molestiae nemo officiis placeat quos repellat saepe temporibus voluptatum.</p>
  </div>
</section>

<section class="service-area" id="services">
  <div class="text-part">
    <h1>
      Services Area</h1>
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
@endsection

<script>

</script>