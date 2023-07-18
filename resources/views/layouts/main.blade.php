<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('assets/css/pablocamara-loader-2.css') }}">

        <title>Pablo Câmara</title>

        <style>
            html,body {
                margin: 0;
                padding: 0;
                font-family: Verdana;
            }

            .header {
                width: 100%;
                background: #00202B;
                margin-bottom: 10px;
            }

            .menu {
                color: #FFFFFF;
                width: 300px;
                margin: auto;
            }

            .menu .menu-item {
                padding: 10px;
                border-bottom: 1px solid #002e3d;
                display: block;
                color: #FFFFFF;
                text-decoration: none;
                background-color: #00202b;
                margin-bottom: 10px;
            }

            .menu .menu-item:hover {
                font-weight: bold;
            }

            .profile-picture {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                overflow: hidden;
                position: relative;
                margin: auto;
                margin-top: 14px;
                margin-bottom: 14px;
            }

            .profile-picture img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
            }

            .section {
                margin: 10px;
                padding: 10px;
            }

            .section.about-me-container {
                max-width: 748px;
                margin: auto;
            }

            h1, h2, h3 {
                margin: 0;
                color: #00202b;
            }

            .section h1, .section h2, .section h3 {
                margin-bottom: 10px;
            }

            .item-list {
                margin-top: 8px;
            }

            .item-list .item {
                min-width: 300px;
                min-height: 180px;
                margin-bottom: 12px;
                display: block;
                text-decoration: none;
            }

            .item-list .item .item-image {
                height: 142px;
                overflow: hidden;
            }

            .item-list .item .item-image img {
                width: 107%;
                margin: auto;
            }

            .item-list .item .item-title {
                padding: 10px;
                background-color: #00202b;
                color: #FFFFFF;
                font-size: 14px;
            }

            .centered-300 {
                width: 300px;
                margin: auto;
            }
        </style>

        @section('styles')

        @show
    </head>
    <body>
        <div class="header">
            <div id="pablocamara">
                <!-- First letter P -->
                <div class="loadLeftP start"></div>
                <div class="loadUpperP start"></div>
                <div class="loadLowerP start"></div>
                <div class="loadRightP start"></div>

                <!-- First letter A -->
                <div class="loadLeftA start"></div>
                <div class="loadRightA start"></div>
                <div class="loadTopA start"></div>
                <div class="loadBottomA start"></div>



                <!-- First letter B -->
                <div class="loadLeftB start"></div>
                <div class="loadTopB start"></div>
                <div class="loadTopRightB start"></div>
                <div class="loadMiddleB start"></div>
                <div class="loadBottomB start"></div>
                <div class="loadBottomRightB start"></div>

                <!-- First letter L -->
                <div class="loadLeftL start"></div>
                <div class="loadBottomL start"></div>

                <!-- First letter O -->
                <div class="loadLeftO start"></div>
                <div class="loadRightO start"></div>
                <div class="loadTopO start"></div>
                <div class="loadBottomO start"></div>


                <!-- First letter C -->
                <div class="loadTopC start"></div>
                <div class="loadLeftC start"></div>
                <div class="loadBottomC start"></div>

                <!-- Second letter A -->
                <div class="loadA2Hat1 start"></div>
                <div class="loadA2Hat2 start"></div>
                <div class="loadA2Hat3 start"></div>
                <div class="loadA2Hat4 start"></div>
                <div class="loadA2Hat5 start"></div>
                <div class="loadLeftA2 start"></div>
                <div class="loadRightA2 start"></div>
                <div class="loadTopA2 start"></div>
                <div class="loadBottomA2 start"></div>

                <!-- First letter M -->
                <div class="loadLeftM start"></div>
                <div class="loadMiddleM1 start"></div>
                <div class="loadMiddleM2 start"></div>
                <div class="loadMiddleM3 start"></div>
                <div class="loadMiddleM4 start"></div>
                <div class="loadMiddleM5 start"></div>
                <div class="loadRightM start"></div>

                <!-- Third letter A -->
                <div class="loadLeftA3 start"></div>
                <div class="loadRightA3 start"></div>
                <div class="loadTopA3 start"></div>
                <div class="loadBottomA3 start"></div>

                <!-- First letter R -->
                <div class="loadLeftR start"></div>
                <div class="loadUpperR start"></div>
                <div class="loadMiddleR start"></div>
                <div class="loadTopRightR start"></div>
                <div class="loadBottomRightR1 start"></div>
                <div class="loadBottomRightR2 start"></div>
                <div class="loadBottomRightR3 start"></div>

                <!-- Fourth letter A -->
                <div class="loadLeftA4 start"></div>
                <div class="loadRightA4 start"></div>
                <div class="loadTopA4 start"></div>
                <div class="loadBottomA4 start"></div>
            </div>
        </div>

        @section('menu')
            @include('menus.main-menu')
        @show

        @yield('content')

        @section('scripts')
            <script type="text/javascript" src="{{ asset('assets/js/helpers.js') }}?v=1"></script>
            <script type="text/javascript" src="{{ asset('assets/js/pablocamara-loader-2.js') }}?v=1"></script>
            <script type="text/javascript" src="{{ asset('assets/js/main-menu.js') }}?v=6"></script>
        @show
    </body>
</html>
