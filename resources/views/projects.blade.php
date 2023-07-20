@extends('layouts.main')
@section('styles')
    <style>
        @media (min-width: 626px) {
            h2 {
                text-align: center;
            }

            .item-list .item {
                display: inline-block;
                max-width: 300px;
            }

            #projects {
                width: 610px;
                margin: auto;
            }
        }
    </style>
@endsection
@section('menu')
    @include('menus.back-to-main-menu')
@endsection
@section('content')
    <div id="projects" class="section centered-300">
        <h2>{{ trans('pages.projects.projects') }}</h2>
        <div class="item-list">
            <a href="https://wsu.pt" target="_blank" class="item">
                <div class="item-image">
                    <img src="{{ asset('assets/img/item1.png') }}" />
                </div>
                <div class="item-title">Will Shorten URLs - URL Shortner em Português - wsu.pt</div>
            </a>

            <a href="https://pablocamara-template-2.camara.pt/" target="_blank" class="item">
                <div class="item-image">
                    <img src="{{ asset('assets/img/pablocamara-template-2.png') }}" />
                </div>
                <div class="item-title">Pablo Câmara's personal website template draft number 2</div>
            </a>

            <a href="https://pablocamara-template-1.camara.pt/" target="_blank" class="item">
                <div class="item-image">
                    <img src="{{ asset('assets/img/pablocamara-template-1.png') }}" />
                </div>
                <div class="item-title">Pablo Câmara's personal website template draft number 1</div>
            </a>

            <a href="https://pablocamara-game-1.camara.pt/" target="_blank" class="item">
                <div class="item-image">
                    <img src="{{ asset('assets/img/tictactoetie.png') }}" />
                </div>
                <div class="item-title">Single Screen Tic Tac Toe game using native javascript OOP</div>
            </a>
        </div>
    </div>
@endsection
