<!DOCTYPE HTML>

<html lang="pt_BR">
    <head>
        <title>PeakyBuster - TSI33C</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="theme-color" content="Blue"/>
        <meta name="description" content="Projeto final referente à disciplina de Sítios Web 3 - Tecnologia em Sistemas para Internet - UTFPR. "/>
        <meta name="author" content="Michel Camargo" itemprop="MMPX"/>

        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <link rel="shortcut icon" href="#" type="image/x-icon">
        <link rel="icon" href="#" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
    <header class="header__wrapper">
        <div class="container header__container">
            <div class="header__content">
                <div class="header__logoContainer">
                    <img class="header__logoElement" src="./public/assets/svg/header/logo-peaky-buster.svg" alt="Main Logo" />
                </div>
                <nav class="header__navWrapper">
                    <ul class="header__navList">
                        <li class="header__navItem">
                            <a class="header__navAnchor" href="{{route('www.home')}}">
                                Início
                            </a>
                        </li>
                        <li class="header__navItem">
                            <a class="header__navAnchor" href="{{route('www.produtos')}}">
                                Produtos
                            </a>
                        </li>
                        <li class="header__navItem">
                            <a class="header__navAnchor" href="{{route('www.blog')}}">
                                Blog
                            </a>
                        </li>
                        <li class="header__navItem">
                            <a class="header__navAnchor" href="{{route('www.about')}}">
                                Sobre
                            </a>
                        </li>
                        <li class="header__navItem">
                            <a class="header__navAnchor" href="{{route('www.contact')}}">
                                Contato
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="body__wrapper">
        <div class="container body__container">
            {{-- Conteúdo da view--}}
            @yield('view-content')
        </div>
    </div>


    <footer class="footer__wrapper">
        <div class="footer__container container">
            <div class="footer__content">
                <ul class="footer__menuContainer">
                    <h6 class="footer__menuTitle">PeakyBuster</h6>
                    <li class="footer__menuItem"><a class="footer__menuLink" href="#">Equipe</a></li>
                    <li class="footer__menuItem"><a class="footer__menuLink" href="#">Referências</a></li>
                    <li class="footer__menuItem"><a class="footer__menuLink" href="#">Instituição de ensino</a></li>
                    <li class="footer__menuItem"><a class="footer__menuLink" href="#">Política de privacidade</a></li>
                </ul>

                <div class="footer__menuContainer">
                    <a class="footer__menuLink" href="#">Facebook</a>
                    <a class="footer__menuLink" href="#">Instagram</a>
                    <a class="footer__menuLink" href="#">Youtube</a>
                    <a class="footer__menuLink" href="#">Github</a>
                    <p class="footer__disclaimer">2022 - Direitos reservados.<br>Aplicação Web de cunho educacional e acadêmico, isento de qualquer intuito comercial. Tecnologia em Sistemas para Internet - Universidade Tecnológica Federal do Paraná</p>
                </div>
            </div>
        </div>
    </footer>


    </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
