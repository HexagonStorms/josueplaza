<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Josue Plaza | Full Stack Developer</title>
        <link type="text/css" rel="stylesheet" href="/css/app.css">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/jp_logo_grey.png">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84658253-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-84658253-1');
        </script>

    </head>
    <body>
        <div id='app'>
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#/">
                        <transition name="fade" appear>
                            <img alt="Brand" src="/img/jp_logo2_white.png" id="brand-logo">
                        </transition>
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="hvr-underline-from-center hvr-grow" href="#/">HOME</a></li>
                        <li><a class="hvr-underline-from-center hvr-grow" href="#/resume">RESUME</a></li>
                        <li><a class="hvr-underline-from-center hvr-grow" href="#/portfolio">PORTFOLIO</a></li>
                        <!-- <li><a href="#/contact">CONTACT</a></li> -->
                    </ul>
                    
                </div>
            </nav>
            <transition name="slide">
                <router-view></router-view>
            </transition>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>