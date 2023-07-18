@extends('layouts.main')

@section('styles')
    <style>
        #home-copyright {
            display: block;
            text-align: center;
            color: #00202b;
        }

        #change-current-language {
            display: block;
            text-align: center;
            padding: 20px;
        }

        #change-current-language img {
            max-width: 30px;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div id="home-copyright" style="display: none">
        Copyright @ {{ date('Y') }}
    </div>

    <div id="change-current-language" style="display: none">
        <img src="{{ asset('assets/img/flags/flag-'.app()->getLocale().'.png') }}" />
    </div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        const hasAnimatedMainMenuOnce = {!! $hasAnimatedMainMenuOnce !!};
        animateMainMenuItems(true, hasAnimatedMainMenuOnce ? 300 : 600, function () {
            const homeCopyright = document.getElementById('home-copyright');
            homeCopyright.style.display = 'block';

            const changeCurrentLanguage = document.getElementById('change-current-language');
            changeCurrentLanguage.style.display = 'block';
            changeCurrentLanguage.onclick = function () {
                window.location.href = "{!! route('language-selection', ['lang' => true]) !!}";
            };

            // notify user has seen slower speed menu animation once
            const endpointHasAnimatedMainMenuOnce = "{!! route('has-animated-main-menu-once') !!}";
            var xhr = new XMLHttpRequest();
            xhr.withCredentials = true;
            xhr.open("GET", endpointHasAnimatedMainMenuOnce);
            xhr.send();
        });
    </script>
@endsection
