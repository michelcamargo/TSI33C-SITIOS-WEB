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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
    <header>
        <div class="container header-container">
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
                        <a href="{{route('www.produtos')}}">
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

    <div class="container content-container">
        {{-- Conteúdo da view--}}
        @yield('view-content')
    </div>

    <footer class="footer">
        <div class="container footer-container">
            <ul>
                <h6>Footer list title</h6>
                <a href="#">item 1</a>
            </ul>
        </div>
    </footer>


    </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
