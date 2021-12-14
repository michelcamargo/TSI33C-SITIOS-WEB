<!DOCTYPE HTML>

<html lang="pt_BR">
    <head>
        <title>BlockBuster - TSI33C</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="theme-color" content="Blue"/>
        <meta name="description" content="Projeto final referente à disciplina de Sítios Web 3 - Tecnologia em Sistemas para Internet - UTFPR. "/>
        <meta name="author" content="Michel Camargo" itemprop="MMPX"/>

        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <link rel="shortcut icon" href="#" type="image/x-icon">
        <link rel="icon" href="#" type="image/x-icon">
    </head>

    <body>
    <header>
        <div class="header-container">
            <div class="main-logo-container">
                <img src="#" alt="Main Logo" />
            </div>
            <nav class="header-nav-wrapper">
                <ul class="header-nav-list">
                    <li>
                        <a href="{{route('www.home')}}">
                            Início
                        </a>
                    </li>
                    <li>
                        <a href="{{route('www.products')}}">
                            Produtos
                        </a>
                    </li>
                    <li>
                        <a href="{{route('www.blog')}}">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{route('www.about')}}">
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="{{route('www.contact')}}">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>



        {{-- Conteúdo da view--}}
        @yield('view-content')

        <footer class="main_footer">
            foooooooter
        </footer>


    </body>
</html>

<?php
