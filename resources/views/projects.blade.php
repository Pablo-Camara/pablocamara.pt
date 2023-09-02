@extends('layouts.main')
@section('styles')
    <style>
        @media (min-width: 626px) {
            h2 {
                text-align: center;
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
            <div class="item-container">
                <a href="https://sbu.pt" target="_blank" class="item">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/item1.png') }}" />
                    </div>
                    <div class="item-title">Shorten Big URLs - URL Shortner em Português - wsu.pt</div>
                </a>
                <div class="item-details">
                    <a href="https://github.com/Pablo-Camara/URL-Shortner">View in Github</a>
                </div>
            </div>

            <div class="item-container">
                <a href="https://task-manager.camara.pt" target="_blank" class="item">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/taskmanager.png') }}" />
                    </div>
                    <div class="item-title">Task Manager</div>
                </a>
                <div class="item-details">
                    <a href="https://github.com/Pablo-Camara/Task-Manager">View in Github</a>
                </div>
            </div>

            <div class="item-container">
                <a href="https://pablocamara-template-2.camara.pt/" target="_blank" class="item">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/pablocamara-template-2.png') }}" />
                    </div>
                    <div class="item-title">Pablo Câmara's personal website template draft number 2</div>
                </a>
                <div class="item-details">
                    <a href="https://github.com/Pablo-Camara/native-frontend-pablo.camara.pt">View in Github</a>
                </div>
            </div>

            <div class="item-container">
                <a href="https://pablocamara-template-1.camara.pt/" target="_blank" class="item">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/pablocamara-template-1.png') }}" />
                    </div>
                    <div class="item-title">Pablo Câmara's personal website template draft number 1</div>
                </a>
                <div class="item-details">
                    <a href="https://github.com/Pablo-Camara/pablo.camara.pt">View in Github</a>
                </div>
            </div>

            <div class="item-container">
                <a href="https://pablocamara-game-1.camara.pt/" target="_blank" class="item">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/tictactoe.png') }}" />
                    </div>
                    <div class="item-title">Single Screen Tic Tac Toe game using native javascript OOP</div>
                </a>
                <div class="item-details">
                    <a href="https://github.com/Pablo-Camara/tic-tac-toe-game-using-native-javascript-oop">View in Github</a>
                </div>
            </div>
        </div>
    </div>
@endsection
