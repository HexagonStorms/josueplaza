<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Josue Plaza | Full Stack Developer</title>
        <link type="text/css" rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id='app'>
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <transition name="fade" appear>
                                <img alt="Brand" src="/img/jp_logo.png" id="brand-logo" width="57px">
                            </transition>
                        </a>
                        
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#/">HOME</a></li>
                        <!-- <li><a href="#/resume">RESUME</a></li> -->
                        <li><a href="#/portfolio">PORTFOLIO</a></li>
                        <!-- <li><a href="#/contact">CONTACT</a></li> -->
                    </ul>
                </nav>
                
            </div>
            <transition name="slide">
                <router-view></router-view>
            </transition>
        </div>
        <script src="/js/app.js"></script>
        
        <script>
            
</script>
    </body>
</html>