@include('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>genie</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body >
      

        <div class="popup">
            <a class="intro" >
                <p class="intro-text" data-aos="fade-up"
                data-aos-duration="1200"> <img src="{{ asset('gallery/logo.png') }}" class="intro-img " alt="">genie</p>
             </a>        
            </div>
        
            <a href="{{ url('client') }}">
                <svg class="arrow">
                    <path class="a1" d="M0 0 L30 22 L60 0"></path>
                    <path class="a2" d="M0 20 L30 42 L60 20"></path>
                    <path class="a3" d="M0 40 L30 62 L60 40"></path>
                </svg>
            </a>
            
        

        <script src="js/script.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>

    </body>
</html>
