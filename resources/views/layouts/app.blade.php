<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>{{__('home.title')}}</title>
    
    <meta name="description" content="Portfolio Landry Galien, Développeur full stack Junior à Lyon" />
    <link rel="canonical" href="https://landry-galien.com/" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Landry Galien | Développeur full stack junior | PHP Laravel, Angular | Lyon" />
    <meta property="og:description" content="Portfolio Landry Galien, Développeur full stack Junior à Lyon" />
    <meta property="og:url" content="https://landry-galien.com/" />
    <meta property="og:site_name" content="Landry Galien | Développeur full stack junior" />

    <script type="application/ld+json">
      {
        "@context" : "http://schema.org",
        "@type" : "SoftwareApplication",
        "name" : "Développeur Full Stack Junior",
        "image" : "https://landry-galien.com/images/profil.jpg",
        "url" : "https://landry-galien.com/",
        "author" : {
          "@type" : "Person",
          "name" : "Landry Galien"
        }
      }
      </script>

  </head>
  <body class="antialiased">
    @yield('home')   

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
