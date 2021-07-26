@extends('layouts.app')

@section('home')
<div class="navbar1">
    <div class="txt">
        <h1 class="name">{{__('home.name')}}</h1>
        <div class="cover"><b>|</b></div>
    </div>
    <ul class="nav">
        <!-- <li><a class="aNav" href="#home">{{__('home.home')}}</a></li> -->
        <li><a class="aNav" href="#home"><i class="bi bi-house-door-fill"></i></a></li>
        <li><a class="aNav" href="#about">{{__('home.about')}}</a></li>
        <li><a class="aNav" href="#portfolio">{{__('home.skills')}}</a></li>
        <li><a class="aNav" href="#services">{{__('home.career')}}</a></li>
        <li><a class="aNav" href="#contact">{{__('home.achievements')}}</a></li>
        <li><a class="aNav" href="#contact">{{__('home.contact')}}</a></li>
    </ul>
<!--     <i class="bi bi-house-door-fill"></i>
    <i class="bi-github" role="img" aria-label="GitHub"></i> -->
    <ul class="nav">
        <li><a class="aNavIcon" href="#home"><i class="bi bi-house-door-fill"></i></a></li>
        <li><a class="aNavIcon" href="#about"><i class="bi bi-person-fill"></i></a></li>
        <li><a class="aNavIcon" href="#portfolio"><i class="bi bi-tools"></i></a></li>
        <li><a class="aNavIcon" href="#services"><i class="bi bi-briefcase-fill"></i></a></li>
        <li><a class="aNavIcon" href="#contact"><i class="bi bi-file-earmark-code-fill"></i></a></li>
        <li><a class="aNavIcon" href="#contact"><i class="bi bi-envelope-fill"></i></a></li>
    </ul>
    
    <ul class="nav">
    @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
        <li ><a href="{{ route('lang.switch', $lang) }}" class="lang">{{$language}}</a>
        @endif
        @endforeach
        @if(App::getLocale()=='en')
        <i class="flag flag-england"></i>
        @elseif(App::getLocale()=='fr')
        <i class="flag flag-fr"></i>
        @elseif(App::getLocale()=='es')
        <i class="flag flag-es"></i>
        @elseif(App::getLocale()=='it')
        <i class="flag flag-it"></i>
        @endif
        </li>
    </ul>
    <div class="langs">
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
    <ul class="nav m-auto">
@if(App::getLocale()=='en')
        <li><i class="flag flag-england"></i>
        @elseif(App::getLocale()=='fr')
        <i class="flag flag-fr"></i>
        @elseif(App::getLocale()=='es')
        <i class="flag flag-es"></i>
        @elseif(App::getLocale()=='it')
        <i class="flag flag-it"></i></li>
        @endif
</ul>
</div>
</div>
<section class="banner-area" id="home">
    
    <h2 class="h2Status">{{__('home.status')}}</h2>
    
</section> 


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