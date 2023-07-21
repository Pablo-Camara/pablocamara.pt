@extends('layouts.main')

@section('scripts')
    @parent

    <script type="text/javascript">
        const hasAnimatedMainMenuOnce = {!! $hasAnimatedMainMenuOnce !!};
        animateMainMenuItems(true, hasAnimatedMainMenuOnce ? 300 : 600, function () {
            const homeCopyright = document.getElementById('copyright-text');
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
