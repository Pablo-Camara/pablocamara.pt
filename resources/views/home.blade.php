@extends('layouts.main')

@section('styles')
    <style>
        #home-copyright {
            display: block;
            text-align: center;
            color: #00202b;
        }
    </style>
@endsection

@section('content')
    <div id="home-copyright" style="display: none">
        Copyright @ {{ date('Y') }}
    </div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        animateMainMenuItems(true, function () {
            const homeCopyright = document.getElementById('home-copyright');
            homeCopyright.style.display = 'block';
        });
    </script>
@endsection
